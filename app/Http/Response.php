<?php

namespace App\Http;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Contracts\Support\Responsable;

abstract class Response implements Responsable
{
    public function toResponse($request)
    {
        $response = app()->call([$this, $this->responseMethod($request)], ['request' => $request]);

        // recursively look for more responsable objects
        while ($response instanceof Responsable) {
            $response = $response->toResponse($request);
        }

        return $response;
    }

    protected function responseMethod($request)
    {
        return 'to'.Str::studly($this->contentType($request)).'Response';
    }

    protected function contentType($request)
    {
        return $this->urlContentType($request) ?? $request->format();
    }

    protected function urlContentType($request)
    {
        return $this->extension($this->filename($request));
    }

    protected function extension($filename)
    {
        if (Str::contains($filename, '.')) {
            return Arr::last(explode('.', $filename));
        }
    }

    protected function filename($request)
    {
        return Arr::last(explode('/', $request->url()));
    }
}
