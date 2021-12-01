<?php

namespace Qase\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use InvalidArgumentException;
use Qase\Client\ApiException;
use Qase\Client\Configuration;
use Qase\Client\HeaderSelector;
use Qase\Client\Model\HashResponse;
use Qase\Client\Model\SharedStepCreate;
use Qase\Client\Model\SharedStepListResponse;
use Qase\Client\Model\SharedStepResponse;
use Qase\Client\Model\SharedStepUpdate;
use Qase\Client\ObjectSerializer;
use RuntimeException;

/**
 * SharedStepsApi Class Doc Comment
 *
 * @category Class
 * @package  Qase\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SharedStepsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration $config
     * @param HeaderSelector $selector
     * @param int $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration   $config = null,
        HeaderSelector  $selector = null,
                        $hostIndex = 0
    )
    {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Operation createSharedStep
     *
     * Create a new shared step.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param SharedStepCreate $sharedStepCreate sharedStepCreate (required)
     *
     * @return HashResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function createSharedStep($code, $sharedStepCreate)
    {
        list($response) = $this->createSharedStepWithHttpInfo($code, $sharedStepCreate);
        return $response;
    }

    /**
     * Operation createSharedStepWithHttpInfo
     *
     * Create a new shared step.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param SharedStepCreate $sharedStepCreate (required)
     *
     * @return array of \Qase\Client\Model\HashResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function createSharedStepWithHttpInfo($code, $sharedStepCreate)
    {
        $request = $this->createSharedStepRequest($code, $sharedStepCreate);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string)$e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string)$request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string)$response->getBody()
                );
            }

            switch ($statusCode) {
                case 200:
                    if ('\Qase\Client\Model\HashResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Qase\Client\Model\HashResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Qase\Client\Model\HashResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string)$response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Qase\Client\Model\HashResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create request for operation 'createSharedStep'
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param SharedStepCreate $sharedStepCreate (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function createSharedStepRequest($code, $sharedStepCreate)
    {
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $code when calling createSharedStep'
            );
        }
        if (strlen($code) > 10) {
            throw new InvalidArgumentException('invalid length for "$code" when calling SharedStepsApi.createSharedStep, must be smaller than or equal to 10.');
        }
        if (strlen($code) < 2) {
            throw new InvalidArgumentException('invalid length for "$code" when calling SharedStepsApi.createSharedStep, must be bigger than or equal to 2.');
        }

        // verify the required parameter 'sharedStepCreate' is set
        if ($sharedStepCreate === null || (is_array($sharedStepCreate) && count($sharedStepCreate) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $sharedStepCreate when calling createSharedStep'
            );
        }

        $resourcePath = '/shared_step/{code}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($code !== null) {
            $resourcePath = str_replace(
                '{' . 'code' . '}',
                ObjectSerializer::toPathValue($code),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($sharedStepCreate)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($sharedStepCreate));
            } else {
                $httpBody = $sharedStepCreate;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Token');
        if ($apiKey !== null) {
            $headers['Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @return array of http client options
     * @throws RuntimeException on file opening failure
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    /**
     * Operation createSharedStepAsync
     *
     * Create a new shared step.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param SharedStepCreate $sharedStepCreate (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function createSharedStepAsync($code, $sharedStepCreate)
    {
        return $this->createSharedStepAsyncWithHttpInfo($code, $sharedStepCreate)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createSharedStepAsyncWithHttpInfo
     *
     * Create a new shared step.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param SharedStepCreate $sharedStepCreate (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function createSharedStepAsyncWithHttpInfo($code, $sharedStepCreate)
    {
        $returnType = '\Qase\Client\Model\HashResponse';
        $request = $this->createSharedStepRequest($code, $sharedStepCreate);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string)$response->getBody()
                    );
                }
            );
    }

    /**
     * Operation deleteSharedStep
     *
     * Delete shared step.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param string $hash Hash. (required)
     *
     * @return HashResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function deleteSharedStep($code, $hash)
    {
        list($response) = $this->deleteSharedStepWithHttpInfo($code, $hash);
        return $response;
    }

    /**
     * Operation deleteSharedStepWithHttpInfo
     *
     * Delete shared step.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param string $hash Hash. (required)
     *
     * @return array of \Qase\Client\Model\HashResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function deleteSharedStepWithHttpInfo($code, $hash)
    {
        $request = $this->deleteSharedStepRequest($code, $hash);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string)$e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string)$request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string)$response->getBody()
                );
            }

            switch ($statusCode) {
                case 200:
                    if ('\Qase\Client\Model\HashResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Qase\Client\Model\HashResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Qase\Client\Model\HashResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string)$response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Qase\Client\Model\HashResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create request for operation 'deleteSharedStep'
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param string $hash Hash. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function deleteSharedStepRequest($code, $hash)
    {
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $code when calling deleteSharedStep'
            );
        }
        if (strlen($code) > 10) {
            throw new InvalidArgumentException('invalid length for "$code" when calling SharedStepsApi.deleteSharedStep, must be smaller than or equal to 10.');
        }
        if (strlen($code) < 2) {
            throw new InvalidArgumentException('invalid length for "$code" when calling SharedStepsApi.deleteSharedStep, must be bigger than or equal to 2.');
        }

        // verify the required parameter 'hash' is set
        if ($hash === null || (is_array($hash) && count($hash) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $hash when calling deleteSharedStep'
            );
        }

        $resourcePath = '/shared_step/{code}/{hash}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($code !== null) {
            $resourcePath = str_replace(
                '{' . 'code' . '}',
                ObjectSerializer::toPathValue($code),
                $resourcePath
            );
        }
        // path params
        if ($hash !== null) {
            $resourcePath = str_replace(
                '{' . 'hash' . '}',
                ObjectSerializer::toPathValue($hash),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Token');
        if ($apiKey !== null) {
            $headers['Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteSharedStepAsync
     *
     * Delete shared step.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param string $hash Hash. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function deleteSharedStepAsync($code, $hash)
    {
        return $this->deleteSharedStepAsyncWithHttpInfo($code, $hash)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteSharedStepAsyncWithHttpInfo
     *
     * Delete shared step.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param string $hash Hash. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function deleteSharedStepAsyncWithHttpInfo($code, $hash)
    {
        $returnType = '\Qase\Client\Model\HashResponse';
        $request = $this->deleteSharedStepRequest($code, $hash);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string)$response->getBody()
                    );
                }
            );
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Operation getSharedStep
     *
     * Get a specific shared step.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param string $hash Hash. (required)
     *
     * @return SharedStepResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getSharedStep($code, $hash)
    {
        list($response) = $this->getSharedStepWithHttpInfo($code, $hash);
        return $response;
    }

    /**
     * Operation getSharedStepWithHttpInfo
     *
     * Get a specific shared step.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param string $hash Hash. (required)
     *
     * @return array of \Qase\Client\Model\SharedStepResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getSharedStepWithHttpInfo($code, $hash)
    {
        $request = $this->getSharedStepRequest($code, $hash);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string)$e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string)$request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string)$response->getBody()
                );
            }

            switch ($statusCode) {
                case 200:
                    if ('\Qase\Client\Model\SharedStepResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Qase\Client\Model\SharedStepResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Qase\Client\Model\SharedStepResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string)$response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Qase\Client\Model\SharedStepResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create request for operation 'getSharedStep'
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param string $hash Hash. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function getSharedStepRequest($code, $hash)
    {
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $code when calling getSharedStep'
            );
        }
        if (strlen($code) > 10) {
            throw new InvalidArgumentException('invalid length for "$code" when calling SharedStepsApi.getSharedStep, must be smaller than or equal to 10.');
        }
        if (strlen($code) < 2) {
            throw new InvalidArgumentException('invalid length for "$code" when calling SharedStepsApi.getSharedStep, must be bigger than or equal to 2.');
        }

        // verify the required parameter 'hash' is set
        if ($hash === null || (is_array($hash) && count($hash) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $hash when calling getSharedStep'
            );
        }

        $resourcePath = '/shared_step/{code}/{hash}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($code !== null) {
            $resourcePath = str_replace(
                '{' . 'code' . '}',
                ObjectSerializer::toPathValue($code),
                $resourcePath
            );
        }
        // path params
        if ($hash !== null) {
            $resourcePath = str_replace(
                '{' . 'hash' . '}',
                ObjectSerializer::toPathValue($hash),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Token');
        if ($apiKey !== null) {
            $headers['Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getSharedStepAsync
     *
     * Get a specific shared step.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param string $hash Hash. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getSharedStepAsync($code, $hash)
    {
        return $this->getSharedStepAsyncWithHttpInfo($code, $hash)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSharedStepAsyncWithHttpInfo
     *
     * Get a specific shared step.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param string $hash Hash. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getSharedStepAsyncWithHttpInfo($code, $hash)
    {
        $returnType = '\Qase\Client\Model\SharedStepResponse';
        $request = $this->getSharedStepRequest($code, $hash);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string)$response->getBody()
                    );
                }
            );
    }

    /**
     * Operation getSharedSteps
     *
     * Get all shared steps.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     * @param Filters6 $filters filters (optional)
     *
     * @return SharedStepListResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getSharedSteps($code, $limit = 10, $offset = 0, $filters = null)
    {
        list($response) = $this->getSharedStepsWithHttpInfo($code, $limit, $offset, $filters);
        return $response;
    }

    /**
     * Operation getSharedStepsWithHttpInfo
     *
     * Get all shared steps.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     * @param Filters6 $filters (optional)
     *
     * @return array of \Qase\Client\Model\SharedStepListResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getSharedStepsWithHttpInfo($code, $limit = 10, $offset = 0, $filters = null)
    {
        $request = $this->getSharedStepsRequest($code, $limit, $offset, $filters);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string)$e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string)$request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string)$response->getBody()
                );
            }

            switch ($statusCode) {
                case 200:
                    if ('\Qase\Client\Model\SharedStepListResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Qase\Client\Model\SharedStepListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Qase\Client\Model\SharedStepListResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string)$response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Qase\Client\Model\SharedStepListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create request for operation 'getSharedSteps'
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     * @param Filters6 $filters (optional)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function getSharedStepsRequest($code, $limit = 10, $offset = 0, $filters = null)
    {
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $code when calling getSharedSteps'
            );
        }
        if (strlen($code) > 10) {
            throw new InvalidArgumentException('invalid length for "$code" when calling SharedStepsApi.getSharedSteps, must be smaller than or equal to 10.');
        }
        if (strlen($code) < 2) {
            throw new InvalidArgumentException('invalid length for "$code" when calling SharedStepsApi.getSharedSteps, must be bigger than or equal to 2.');
        }

        if ($limit !== null && $limit > 25) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling SharedStepsApi.getSharedSteps, must be smaller than or equal to 25.');
        }
        if ($limit !== null && $limit < 0) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling SharedStepsApi.getSharedSteps, must be bigger than or equal to 0.');
        }

        if ($offset !== null && $offset > 100000) {
            throw new InvalidArgumentException('invalid value for "$offset" when calling SharedStepsApi.getSharedSteps, must be smaller than or equal to 100000.');
        }
        if ($offset !== null && $offset < 0) {
            throw new InvalidArgumentException('invalid value for "$offset" when calling SharedStepsApi.getSharedSteps, must be bigger than or equal to 0.');
        }


        $resourcePath = '/shared_step/{code}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($limit !== null) {
            if ('form' === 'form' && is_array($limit)) {
                foreach ($limit as $key => $value) {
                    $queryParams[$key] = $value;
                }
            } else {
                $queryParams['limit'] = $limit;
            }
        }
        // query params
        if ($offset !== null) {
            if ('form' === 'form' && is_array($offset)) {
                foreach ($offset as $key => $value) {
                    $queryParams[$key] = $value;
                }
            } else {
                $queryParams['offset'] = $offset;
            }
        }
        // query params
        if (is_array($filters)) {
            $filters = ObjectSerializer::serializeCollection($filters, 'deepObject', true);
        }
        if ($filters !== null) {
            $queryParams['filters'] = $filters;
        }


        // path params
        if ($code !== null) {
            $resourcePath = str_replace(
                '{' . 'code' . '}',
                ObjectSerializer::toPathValue($code),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Token');
        if ($apiKey !== null) {
            $headers['Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getSharedStepsAsync
     *
     * Get all shared steps.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     * @param Filters6 $filters (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getSharedStepsAsync($code, $limit = 10, $offset = 0, $filters = null)
    {
        return $this->getSharedStepsAsyncWithHttpInfo($code, $limit, $offset, $filters)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSharedStepsAsyncWithHttpInfo
     *
     * Get all shared steps.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param int $limit A number of entities in result set. (optional, default to 10)
     * @param int $offset How many entities should be skipped. (optional, default to 0)
     * @param Filters6 $filters (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getSharedStepsAsyncWithHttpInfo($code, $limit = 10, $offset = 0, $filters = null)
    {
        $returnType = '\Qase\Client\Model\SharedStepListResponse';
        $request = $this->getSharedStepsRequest($code, $limit, $offset, $filters);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string)$response->getBody()
                    );
                }
            );
    }

    /**
     * Operation updateSharedStep
     *
     * Update shared step.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param string $hash Hash. (required)
     * @param SharedStepUpdate $sharedStepUpdate sharedStepUpdate (required)
     *
     * @return HashResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function updateSharedStep($code, $hash, $sharedStepUpdate)
    {
        list($response) = $this->updateSharedStepWithHttpInfo($code, $hash, $sharedStepUpdate);
        return $response;
    }

    /**
     * Operation updateSharedStepWithHttpInfo
     *
     * Update shared step.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param string $hash Hash. (required)
     * @param SharedStepUpdate $sharedStepUpdate (required)
     *
     * @return array of \Qase\Client\Model\HashResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function updateSharedStepWithHttpInfo($code, $hash, $sharedStepUpdate)
    {
        $request = $this->updateSharedStepRequest($code, $hash, $sharedStepUpdate);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string)$e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int)$e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string)$request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string)$response->getBody()
                );
            }

            switch ($statusCode) {
                case 200:
                    if ('\Qase\Client\Model\HashResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Qase\Client\Model\HashResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Qase\Client\Model\HashResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string)$response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Qase\Client\Model\HashResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create request for operation 'updateSharedStep'
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param string $hash Hash. (required)
     * @param SharedStepUpdate $sharedStepUpdate (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function updateSharedStepRequest($code, $hash, $sharedStepUpdate)
    {
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $code when calling updateSharedStep'
            );
        }
        if (strlen($code) > 10) {
            throw new InvalidArgumentException('invalid length for "$code" when calling SharedStepsApi.updateSharedStep, must be smaller than or equal to 10.');
        }
        if (strlen($code) < 2) {
            throw new InvalidArgumentException('invalid length for "$code" when calling SharedStepsApi.updateSharedStep, must be bigger than or equal to 2.');
        }

        // verify the required parameter 'hash' is set
        if ($hash === null || (is_array($hash) && count($hash) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $hash when calling updateSharedStep'
            );
        }
        // verify the required parameter 'sharedStepUpdate' is set
        if ($sharedStepUpdate === null || (is_array($sharedStepUpdate) && count($sharedStepUpdate) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $sharedStepUpdate when calling updateSharedStep'
            );
        }

        $resourcePath = '/shared_step/{code}/{hash}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($code !== null) {
            $resourcePath = str_replace(
                '{' . 'code' . '}',
                ObjectSerializer::toPathValue($code),
                $resourcePath
            );
        }
        // path params
        if ($hash !== null) {
            $resourcePath = str_replace(
                '{' . 'hash' . '}',
                ObjectSerializer::toPathValue($hash),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($sharedStepUpdate)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($sharedStepUpdate));
            } else {
                $httpBody = $sharedStepUpdate;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Token');
        if ($apiKey !== null) {
            $headers['Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        return new Request(
            'PATCH',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation updateSharedStepAsync
     *
     * Update shared step.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param string $hash Hash. (required)
     * @param SharedStepUpdate $sharedStepUpdate (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function updateSharedStepAsync($code, $hash, $sharedStepUpdate)
    {
        return $this->updateSharedStepAsyncWithHttpInfo($code, $hash, $sharedStepUpdate)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateSharedStepAsyncWithHttpInfo
     *
     * Update shared step.
     *
     * @param string $code Code of project, where to search entities. (required)
     * @param string $hash Hash. (required)
     * @param SharedStepUpdate $sharedStepUpdate (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function updateSharedStepAsyncWithHttpInfo($code, $hash, $sharedStepUpdate)
    {
        $returnType = '\Qase\Client\Model\HashResponse';
        $request = $this->updateSharedStepRequest($code, $hash, $sharedStepUpdate);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string)$response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string)$response->getBody()
                    );
                }
            );
    }
}
