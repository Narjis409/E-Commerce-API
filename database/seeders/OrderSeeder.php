<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\orderProduct;

class OrderSeeder extends Seeder
{
    /**
     * Seed the orders table.
     *
     * @return void
     */
    public function run()
    {
        
        $customerIds = DB::table('customers')->pluck('id')->toArray();
        $productIds = DB::table('products')->pluck('id')->toArray();

        
        if (empty($customerIds) || empty($productIds)) {
            Log::warning('No customers or products found to seed orders.');
            return;
        }

        $orders = [
            [
                'customer_id' => $customerIds[array_rand($customerIds)],
                'status' => 'pending',
                'total_amount' => 99.99,
            ],
            [
                'customer_id' => $customerIds[array_rand($customerIds)],
                'status' => 'completed',
                'total_amount' => 49.49,
            ],
            [
                'customer_id' => $customerIds[array_rand($customerIds)],
                'status' => 'shipped',
                'total_amount' => 75.00,
            ],
            
        ];

        foreach ($orders as $order) {
            
            $orderId = DB::table('orders')->insertGetId($order);

          
            $orderProducts = [];
            $selectedProducts = array_rand($productIds, 2);
            foreach ($selectedProducts as $productIndex) {
                $orderProducts[] = [
                    'order_id' => $orderId,
                    'product_id' => $productIds[$productIndex],
                    'quantity' => rand(1, 5),
                ];
            }

            
            orderProduct::insert($orderProducts);
        }
    }
}
