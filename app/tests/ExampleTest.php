<?php

class TestControllers extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testHomeController()
	{
		$crawler = $this->client->request('GET', '/home');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

	public function clientController()
    {
        $crawler = $this->client->request('GET', '/clients');

        $this->assertTrue($this->client->getResponse()->isOk());
    }

    public function invoicesController()
    {
        $crawler = $this->client->request('GET', '/invoices');

        $this->assertTrue($this->client->getResponse()->isOk());
    }

    public function paymentsController()
    {
        $crawler = $this->client->request('GET', '/quotes');

        $this->assertTrue($this->client->getResponse()->isOk());
    }

    public function quotesController()
    {
        $crawler = $this->client->request('GET', '/payments');

        $this->assertTrue($this->client->getResponse()->isOk());
    }

    public function testConnection() {

        if (DB::connection('mysql')->getDatabaseName())
        {
            return 'Connected to the DB: ' . DB::connection('mysql')->getDatabaseName();
        }
    }

}
