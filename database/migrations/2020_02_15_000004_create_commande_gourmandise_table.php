<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandeGourmandiseTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'commande_gourmandise';

    /**
     * Run the migrations.
     * @table commande_gourmandise
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('gourmandise_id')->unsigned();
            $table->integer('commande_id')->unsigned();
            $table->integer('quantity');

            $table->index(["commande_id"], 'fk_commande_gourmandise_commande1_idx');

            $table->index(["gourmandise_id"], 'fk_commande_gourmandise_gourmandise1_idx');


            $table->foreign('gourmandise_id', 'fk_commande_gourmandise_gourmandise1_idx')
                ->references('id')->on('gourmandises')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('commande_id', 'fk_commande_gourmandise_commande1_idx')
                ->references('id')->on('commandes')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
