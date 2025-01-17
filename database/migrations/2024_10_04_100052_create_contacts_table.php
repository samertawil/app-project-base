<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();// done
            $table->foreignId('contact_type')->constrained('statuses')->comment('نوع جهة الاتصال : شركة , فرد وغيره');// done
            $table->string('identity_number')->nullable()->comment('الرقم الوطني: ممكن ان يكون رقم هوبة بحالة الافراد او رقم مشتغل مرخص بحالة الشركات وغيره');// done
            $table->string('full_name'); // done
            $table->string('nick_name')->nullable();// done
            $table->string('fname')->nullable();  // done
            $table->string('sname')->nullable();// done
            $table->string('tname')->nullable();// done
            $table->string('lname')->nullable();// done
            $table->string('responsible')->nullable()->comment('الشخص المسؤل في حال الشركات');// done
            $table->foreignId('address_id')->nullable()->constrained('addresses');
            $table->string('short_description')->nullable(); // done
            $table->string('description')->nullable(); //done
            $table->string('personal_phone_primary')->nullable();// done
            $table->string('personal_phone_secondary')->nullable();// done
            $table->string('work_phone_primary')->nullable();
            $table->string('work_phone_secondary')->nullable();
            $table->boolean('isFavorite')->default(0);
            $table->json('properties')->nullable();
            $table->json('attchments')->nullable(); // done
            $table->text('note')->nullable(); //done
            $table->timestamps();
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
