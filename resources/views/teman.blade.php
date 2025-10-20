<div class="container">

    <div class="menu">
        <a href="./">Home</a>
        <a href="./teman">teman</a>
        <a href="./about">About</a>
    </div>

    <div class="konten">
    <h3>Data Teman</h3>
    
    @if(empty($data))
        <p>Tidak ada Data</p>
    @else
    <table border="1">
    <tr>
        <th>ID Buku</th>
        <th>Nama Teman</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>Telp</th>
        <th>WA</th>
    </tr>
    @foreach($data as $d)
    <tr>
        <td>{{ $d['idbuku'] }}</td>
        <td>{{ $d['namateman'] }}</td>
        <td>Jl. Merdeka No. 10</td>
        <td>Bandung</td>
        <td>08123456789</td>
        <td>08123456789</td>
    </tr>
    @endforeach
    </table>
    @endif
    </div>


</div>