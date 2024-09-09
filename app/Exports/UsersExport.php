<!--

namespace App\Exports;

use App\Models\User;
use App\Models\Provincia;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection, WithMapping, WithHeadings
{
    protected $provincias;

    public function __construct()
    {
        // Consulta las provincias y guárdalas en un array con clave 'id'
        $this->provincias = Provincia::all()->keyBy('id');
    }

    public function collection()
    {
        // Consulta los usuarios, solo traes la información básica, sin relaciones
        return User::all();
    }

    public function map($user): array
    {
        // Asigna la provincia a cada usuario en base a su 'provincia_id'
        $provincia = isset($this->provincias[$user->provincia])
            ? $this->provincias[$user->provincia]->nombre_provincia
            : 'Provincia no definida';

            $provinciaTrabajo = isset($this->provincias[$user->provincia_laboral])
            ? $this->provincias[$user->provincia_laboral]->nombre_provincia
            : 'Provincia no definida';

        return [
            $user->id,
            $user->nombres,
            $user->apellidos,
            $user->cedula,
            $provincia,  // Aquí se asigna el nombre de la provincia
            $user->fecha_nacimiento,
            $user->email,
            $user->observaciones,
            $user->fecha_ingreso,
            $user->cargo,
            $user->departamento,
            $provinciaTrabajo,
            $user->sueldo,
            $user->jornada_parcial,
            $user->observaciones_laborales,
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nombres',
            'Apellidos',
            'Cédula',
            'Provincia',
            'Fecha de Nacimiento',
            'Email',
            'Observaciones',
            'Fecha de Ingreso',
            'Cargo',
            'Departamento',
            'Provincia Labora',
            'Sueldo',
            'Jornada Parcial',
            'Observaciones Laborales',
        ];
    }
} -->
