use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostApprovalsTable extends Migration
{
    public function up()
    {
        Schema::create('post_approvals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->decimal('selling_price', 10, 2);
            $table->string('location');
            $table->string('sale_status');
            $table->decimal('plot_area', 10, 2);
            $table->boolean('boundary_wall');
            $table->string('main_entrance_facing');
            $table->unsignedTinyInteger('no_of_open_sides');
            $table->string('ownership_type');
            $table->string('water_supply');
            $table->unsignedSmallInteger('width_of_road_facing_property');
            $table->decimal('avg_psf', 10, 2);
            $table->string('img_location')->nullable();
            $table->boolean('approved')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('post_approvals');
    }
}
