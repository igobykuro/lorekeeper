<?php

namespace Tests\Unit;

use App\Http\Controllers\SalesController;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;

class SalesControllerTest extends TestCase
{
    public function test_get_sale_raffle_tickets_uses_request_instance(): void
    {
        $method = new \ReflectionMethod(SalesController::class, 'getSaleRaffleTickets');

        $this->assertCount(2, $method->getParameters());
        $this->assertSame('request', $method->getParameters()[1]->getName());
        $this->assertSame(Request::class, $method->getParameters()[1]->getType()?->getName());
    }
}
