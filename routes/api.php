use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\v1\AuthController;
use App\Http\Controllers\API\v1\UserController;



Route::prefix('v1')->group(function () {

    Route::post('register', [AuthController::class,'registerUser']);


});
