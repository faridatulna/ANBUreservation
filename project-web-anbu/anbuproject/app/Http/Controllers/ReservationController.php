<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Reservation;
use App\Computer;
use Carbon\Carbon;
class ReservationController extends Controller
{
    function computer( Request $request )
    {
        // $this->validate( $request, [ 'id_lab' => 'required|exists:id_lab' ] );
        $computers = Computer::where('id_lab', $request->get('id') )->get();
        //you can handle output in different ways, I just use a custom filled array. you may pluck data and directly output your data.
        $output = [];
        foreach( $computers as $computer )
        {
            $output[$computer->id] = $computer->no_pc;
        }
        sort($output);
        return $output;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'proposal' => 'required|file|mimes:pdf',
            'nrp' => 'required|numeric|unique:reservations,nrp|digits:14',
            'email' => 'unique:reservations,email',
            'no_hp' => 'required|numeric|min:8',
        ],[
            'proposal.mimes' => 'Format proposal adalah (.pdf)',
            'nrp.unique' => 'NRP telah digunakan sebagai akun lain',
            'nrp.digits' => 'NRP baru (14 digits) ex: 051116000xxxx',
            'email.unique' => 'Email telah digunakan sebagai akun lain',
            'no_hp.numeric' => 'No Hp harus angka',
        ]);

        $reservation = new Reservation;
        $reservation->nama = $request->nama;
        $reservation->nrp = $request->nrp;
        $reservation->email = $request->email;
        $reservation->id_lab = $request->id_lab;
        $reservation->no_pc = $request->no_pc;
        $reservation->no_hp = $request->no_hp;
        //File Upload
        $file = $request->file('proposal');
        $inputFile['namafile'] = time().".".$file->getClientOriginalExtension();
        $desPath = public_path('/files');
        $file->move($desPath,$inputFile['namafile']);
        $reservation->proposal = $inputFile['namafile'];
        //
        $reservation->status = 0;
        $reservation->tgl_pinjam = Carbon::now();
        $reservation->save();

        return redirect(route('welcome') . '#two')->with('status', 'Data Berhasil Ditambahkan');
        //return redirect(url()->current() . "#two");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
