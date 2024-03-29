<?php

namespace JaysonDev\Teletant\Exception;


use JaysonDev\Teletant\TeletantResponse;

class ResponseException extends TeletantException
{
    /**
     * @var TeletantResponse The response that threw the exception.
     */
    protected $response;
    /**
     * @var array Decoded response.
     */
    protected $responseData;

    /**
     * Creates a TelegramResponseException.
     *
     * @param TeletantResponse $response The response that threw the exception.
     * @param TeletantException $previousException The more detailed exception.
     */
    public function __construct(TeletantResponse $response, TeletantException $previousException = null)
    {
        $this->response = $response;
        $this->responseData = $response->getDecodedBody();
        $errorMessage = $this->get('description', 'Unknown error from API Response.');
        $errorCode = $this->get('error_code', -1);
        parent::__construct($errorMessage, $errorCode, $previousException);
    }

    /**
     * A factory for creating the appropriate exception based on the response from Telegram.
     *
     * @param TeletantResponse $response The response that threw the exception.
     *
     * @return ResponseException
     */
    public static function create(TeletantResponse $response)
    {
        $data = $response->getDecodedBody();
        $code = null;
        $message = null;
        if (isset($data['ok'], $data['error_code']) && $data['ok'] === false) {
            $code = $data['error_code'];
            $message = isset($data['description']) ? $data['description'] : 'Unknown error from API.';
        }
        // Others
        throw new static($response, new TeletantOtherException($message, $code));
    }

    /**
     * Checks isset and returns that or a default value.
     *
     * @param string $key
     * @param mixed $default
     *
     * @return mixed
     */
    private function get($key, $default = null)
    {
        if (isset($this->responseData[$key])) {
            return $this->responseData[$key];
        }
        return $default;
    }

    /**
     * Returns the HTTP status code.
     *
     * @return int
     */
    public function getHttpStatusCode()
    {
        return $this->response->getHttpStatusCode();
    }

    /**
     * Returns the error type.
     *
     * @return string
     */
    public function getErrorType()
    {
        return $this->get('type', '');
    }

    /**
     * Returns the raw response used to create the exception.
     *
     * @return string
     */
    public function getRawResponse()
    {
        return $this->response->getBody();
    }

    /**
     * Returns the decoded response used to create the exception.
     *
     * @return array
     */
    public function getResponseData()
    {
        return $this->responseData;
    }

    /**
     * Returns the response entity used to create the exception.
     *
     * @return TeletantResponse
     */
    public function getResponse()
    {
        return $this->response;
    }
}