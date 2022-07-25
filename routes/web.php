<?php

use App\Http\Livewire\Admin\AdminView;
use App\Http\Livewire\Admin\AnuncioCreate;
use App\Http\Livewire\Admin\AnuncioDelete;
use App\Http\Livewire\Admin\AnuncioEdit;
use App\Http\Livewire\Admin\AnuncioIndex;
use App\Http\Livewire\Admin\AppUser;
use App\Http\Livewire\Admin\Denegado;
use App\Http\Livewire\Admin\DescargasIndex;
use App\Http\Livewire\Admin\DocumentoUpload;
use App\Http\Livewire\Admin\IndexDocumento;
use App\Http\Livewire\Admin\Solicitud;
use App\Http\Livewire\Admin\UsuarioCreate;
use App\Http\Livewire\Admin\UsuarioIndex;
use App\Http\Livewire\Admin\UsuariosEdit;
use App\Http\Livewire\Admin\UsuariosEditPassword;
use App\Http\Livewire\Admin\UsuarioShow;
use App\Http\Livewire\Anuncios\AnunciosIndex;
use App\Http\Livewire\Conocenos\Mision;
use App\Http\Livewire\Conocenos\Valores;
use App\Http\Livewire\Conocenos\Vision;
use App\Http\Livewire\CreateAdmin;
use App\Http\Livewire\Documentos\DocumentosIndex;
use App\Http\Livewire\Index;
use App\Http\Livewire\IniciarSesion\Login;
use App\Http\Livewire\Requests\RequestCreate;
use App\Http\Livewire\Requests\RequestDelete;
use App\Http\Livewire\Requests\RequestEdit;
use Facade\IgnitionContracts\Solution;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('livewire.index');
// });

Route::get('/', Index::class)->name('index');

//conocenos
Route::get('/mision', Mision::class)->name('conocenos.mision');
Route::get('/vision', Vision::class)->name('conocenos.vision');
Route::get('/valores', Valores::class)->name('conocenos.valores');

//Inicio de sesion
Route::get('/login', Login::class)->name('login');

Route::get('/admin/crear-nuevos-admin', CreateAdmin::class)->name('crear.admin');

Route::group(['middleware' => 'auth'], function () {
    //Admin
    Route::get('/admin', AdminView::class)->name('admin.view')->middleware('auth.admin');
    Route::get('/admin/usuarios', UsuarioIndex::class)->name('admin.usuarios')->middleware('auth.admin');
    Route::get('/admin/usuarios/crear-usuario', UsuarioCreate::class)->name('admin.create-user')->middleware('auth.admin');
    Route::get('/admin/usuarios/{usuario}/editar-usuario', UsuariosEdit::class)->name('admin.user-edit')->middleware('auth.admin');
    Route::get('/admin/usuarios/{usuario}/usuario', UsuarioShow::class)->name('admin.show-user')->middleware('auth.admin');
    Route::get('/admin/usuarios/generar-pdf', [UsuarioIndex::class, 'generarPDF'])->name('admin.users.pdf')->middleware('auth.admin');
    Route::get('/admin/usuarios/export-excel', [UsuarioIndex::class, 'exportExcel'])->name('admin.users.excel')->middleware('auth.admin');

    //Admin anuncios
    Route::get('/admin/anuncios', AnuncioIndex::class)->name('admin.anuncios');
    Route::get('/admin/anuncios/crear-anuncio', AnuncioCreate::class)->name('admin.anuncio-create')->middleware('auth.admin');
    Route::get('/admin/anuncios/{anuncio}/editar-anuncio', AnuncioEdit::class)->name('admin.anuncio-edit')->middleware('auth.admin');
    Route::get('/admin/anuncio/{anuncio}/eliminar', AnuncioDelete::class)->name('admin.anuncio-delete')->middleware('auth.admin');
    Route::get('/admin/anuncios/generar-pdf', [AnuncioIndex::class, 'generarPDF'])->name('admin.anuncio.pdf')->middleware('auth.admin');
    Route::get('/admin/anuncios/export-excel', [AnuncioIndex::class, 'exportExcel'])->name('admin.anuncio.excel')->middleware('auth.admin');

    //Admin documentos
    Route::get('/admin/documentos-upload', DocumentoUpload::class)->name('admin.documento-create')->middleware('auth.admin');
    Route::post('/admin/documentos-upload', [DocumentoUpload::class, 'fileUpload'])->name('fileUpload')->middleware('auth.admin');
    Route::get('/admin/documentos/index', IndexDocumento::class)->name('admin.documentos-index')->middleware('auth.admin');
    Route::get('/admin/documentos/export-excel', [IndexDocumento::class, 'exportExcel'])->name('admin.documentos.excel')->middleware('auth.admin');

    //Admin descargas
    Route::get('/admin/descargas', DescargasIndex::class)->name('admin.descargas')->middleware('auth.admin');
    Route::get('/admin/descargas/generar-pdf', [DescargasIndex::class, 'generarPDF'])->name('admin.descargas.pdf')->middleware('auth.admin');
    Route::get('/admin/descargas/export-excel', [DescargasIndex::class, 'exportExcel'])->name('admin.descargas.excel')->middleware('auth.admin');

    //Admin Solicitudes
    Route::get('/admin/solicitudes', Solicitud::class)->name('admin.solicitudes')->middleware('auth.admin');
    Route::get('/admin/solicitudes/generar-pdf', [Solicitud::class, 'generarPDF'])->name('admin.solicitudes.pdf')->middleware('auth.admin');
    Route::get('/admin/solicitudes/export-excel', [Solicitud::class, 'exportExcel'])->name('admin.solicitudes.excel')->middleware('auth.admin');

    //requests usuarios
    Route::get('/usuario/solicitud', RequestCreate::class)->name('requests.create');
    Route::get('/usuario/solicitud/{request}/delete', RequestEdit::class)->name('requests.delete');

    //Anuncios usuarios
    Route::get('/usuario/anuncios', AnunciosIndex::class)->name('anuncios.index');

    //Documentos Usuarios
    Route::get('/usuario/documentos', DocumentosIndex::class)->name('documentos.index');
    Route::get('/usuario/editar-password', UsuariosEditPassword::class)->name('usuario.edit-pwd');
});
