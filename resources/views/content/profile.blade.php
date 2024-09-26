@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
<div class="container">
    <div class="profile-header">
        <h1>Tentang MotorJunClub</h1>
        <p>MotorJunClub adalah komunitas penggemar motor yang solid dan terus berkembang sejak didirikan pada tahun 2010. Kami berkomitmen untuk menciptakan persaudaraan yang erat di antara anggota dan menyediakan platform bagi para penggemar motor untuk berbagi pengalaman, pengetahuan, serta mengikuti berbagai kegiatan otomotif.</p>
    </div>

    <div class="vision-mission-section">
        <div class="vision-mission">
            <h2>Visi Kami</h2>
            <p>Menjadi klub motor terdepan di Indonesia yang mendukung keselamatan berkendara, komunitas ramah lingkungan, dan persaudaraan antar bikers di seluruh negeri.</p>
        </div>

        <div class="vision-mission">
            <h2>Misi Kami</h2>
            <ul>
                <li>Mengorganisir acara dan kegiatan yang memperkuat ikatan antar anggota serta meningkatkan keterampilan berkendara.</li>
                <li>Mendorong keselamatan berkendara dan kesadaran akan pentingnya tanggung jawab di jalan raya.</li>
                <li>Berpartisipasi aktif dalam kegiatan sosial dan lingkungan untuk memberikan dampak positif kepada komunitas sekitar.</li>
                <li>Membangun budaya solidaritas di antara bikers dengan berbagai latar belakang.</li>
            </ul>
        </div>
    </div>

    <div class="company-values">
        <h2>Nilai-Nilai Kami</h2>
        <p>Di MotorJunClub, kami berpegang pada prinsip-prinsip yang membimbing semua kegiatan kami:</p>
        <ul class="values-list">
            <li><strong>Kebersamaan:</strong> Kami selalu menempatkan solidaritas dan persahabatan di atas segalanya dalam setiap aktivitas yang kami lakukan.</li>
            <li><strong>Keselamatan:</strong> Kami berkomitmen untuk selalu mengedepankan keselamatan berkendara dalam setiap kegiatan touring dan event komunitas.</li>
            <li><strong>Komunitas:</strong> Partisipasi aktif dalam kegiatan sosial dan dukungan terhadap komunitas sekitar adalah bagian dari identitas kami.</li>
            <li><strong>Semangat:</strong> Kami menginspirasi anggota untuk tetap bersemangat dalam mengembangkan diri, baik dalam keterampilan berkendara maupun di kehidupan sehari-hari.</li>
        </ul>
    </div>

    <div class="company-history">
        <h2>Sejarah Kami</h2>
        <p>Sejak didirikan pada tahun 2010, MotorJunClub telah berkembang menjadi salah satu klub motor terbesar di Indonesia. Berawal dari komunitas kecil penggemar motor, kami kini memiliki ratusan anggota di berbagai kota besar di Indonesia, yang rutin mengadakan kegiatan touring, gathering, dan event sosial.</p>
        <p>Perjalanan kami di dunia otomotif telah membawa kami pada banyak momen berharga, termasuk touring pertama kami ke seluruh Jawa pada tahun 2012 dan keterlibatan aktif dalam kampanye keselamatan berkendara pada 2018. Kami berkomitmen untuk terus berkembang sebagai komunitas yang tidak hanya solid, tetapi juga memberikan dampak positif bagi masyarakat dan lingkungan.</p>
    </div>
</div>
@endsection
