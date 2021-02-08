<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Utility\ILoggerService;

class TestLoggingController extends Controller
{
    //
    protected $logger;

    public function __construct(ILoggerService $service) {
        $this->logger = $service;
    }
    public function index(Request $request, $msg) {
        $this->logger->info($msg);
    }
}
