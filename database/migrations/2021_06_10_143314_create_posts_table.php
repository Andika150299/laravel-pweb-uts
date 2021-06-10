<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreatePostsTable extends Migration
{
 /**
 * Run the migrations.
 *
 * @return void
 */
 public function up()
 {
 Schema::create('posts', function (Blueprint $table) {
 $table->id();
 $table->int('nim');
 $table->string('nama_mhs');
 $table->string('nhp');
 $table->string('alamat');
 $table->string('image');
 $table->timestamps();
 });
 }
 /**
 * Reverse the migrations.
 *
 * @return void
 */
 public function down()
 {
 Schema::dropIfExists('posts');
 }
}