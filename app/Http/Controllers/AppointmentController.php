use Illuminate\Http\Request;
namespace App\Http\Controllers;

class AppointmentController extends Controller
{
    public function bookAppointment(Request $request)
    {
        // Handle appointment booking logic
        // Display confirmation message
        return "Appointment booked with {$request->input('doctor_name')} on {$request->input('appointment_date')}.";
    }

    public function searchDoctor(Request $request)
    {
        // Handle doctor search logic
        // Display search results
        return "Search results for {$request->input('search_doctor')}:";
    }
}
