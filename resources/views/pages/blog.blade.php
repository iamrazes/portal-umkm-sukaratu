@extends('layouts.portal')

@section('title')
    <title>Blog | Portal UMKM Desa Sukaratu</title>
@endsection

@section('content')
    <main class="container blog my-4" style="color: #2D2D2D">
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
            <div class="col-lg-6 px-0">
                <h1 class="display-4 fst-italic">Bergabung dengan berbagai produk UMKM</h1>
                <p class="lead my-3">Bergabung dengan berbagai produk UMKM lainnya dan promosikan usahamu di Portal UMKM Desa
                    Sukaratu</p>
                <p class="lead mb-0"><a href="#bergabungumkm" class=" fw-bold" style="color: #F1BB69">Lanjutkan membaca...</a>
                </p>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis">Story</strong>
                        <h3 class="mb-0">Fasilitas Desa</h3>
                        <div class="mb-1 text-body-secondary">31 Agustus</div>
                        <p class="card-text mb-auto">
                            Berbagai informasi mengenai fasilitas desa sukaratu dan manfaatnya bagi masyarakat.
                        </p>
                        <a href="#fasilitas" class="icon-link gap-1 icon-link-hover stretched-link">
                            Lanjutkan membaca
                            <svg class="bi">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" style="object-fit: cover"
                            src="{{ asset('images/blog1.jpg') }}" alt="">
                        {{-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success-emphasis">Story</strong>
                        <h3 class="mb-0">Program Kerja KKN UNPI</h3>
                        <div class="mb-1 text-body-secondary">31 Agustus</div>
                        <p class="mb-auto">
                            Website Portal UMKM Desa Sukaratu merupakan salah satu program kerja KKN UNPI tahun 2023 yang...
                        </p>
                        <a href="#kkn" class="icon-link gap-1 icon-link-hover stretched-link">
                            Lanjutkan membaca
                            <svg class="bi">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" style="object-fit: cover"
                            src="{{ asset('images/blog2.jpg') }}" alt="">
                        {{-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">

                </h3>

                <article class="blog-post my-2">
                    <h2 class="display-5 link-body-emphasis mb-1" id="bergabungumkm">Bergabung dengan Portal UMKM </h2>
                    <p class="blog-post-meta">31 Agustus 2023 Oleh <a href="#">Admin</a></p>

                    {{-- <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.</p> --}}

                    <img src="{{ asset('images/blog3.png') }}" alt=""
                        style="width:100%; height: 320px; object-fit: cover;">
                        <br>
                        <br>
                        <b>Daftarkan Produk UMKM Anda di Portal UMKM Desa Sukaratu</b>
                        <p>Portal UMKM Desa Sukaratu bertujuan untuk menjadi wadah penampung produk dan usaha masyarakat Desa Sukaratu secara digital atau online. Portal UMKM ini merupakan hasil kerja sama dan program kerja dari mahasiswa/i KKN UNPI 2023 untuk membangun ekonomi masyarakat Desa Sukaratu.</p>
                    <p>Portal UMKM ini dikelola oleh perangkat desa dan di maintenance oleh mahasiswa selama tahun 2023, untuk dapat bergabung Anda dapat cukup datang ke kantor Desa Sukaratu atau menghubungi perangkat desa yang bersangkutan.</p>
                    <p>Untuk melakukan pendaftaran silahkan hubungi kontak dibawah ini:</p>
                    <ul>
                        <b>Perangkat Desa</b> :
                        <li>Agung</li>
                        WhatsApp : +62 815-6313-9004
                    </ul>
                    Untuk informasi lebih lengkap kunjungi halaman berikut
                    <a href="{{ route('contact')}}"><b>KONTAK KAMI</b></a>.
                        <hr>
                    {{-- <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
          <h2>Blockquotes</h2>
          <p>This is an example blockquote in action:</p> --}}
                    {{-- <blockquote class="blockquote">
                <p>Quoted text goes here.</p>
            </blockquote>
            <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
            <h3>Example lists</h3>
            <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout. This is an example unordered list:</p>
            <ul>
                <li>First list item</li>
                <li>Second list item with a longer description</li>
                <li>Third list item to close it out</li>
            </ul>
            <p>And this is an ordered list:</p>
            <ol>
                <li>First list item</li>
                <li>Second list item with a longer description</li>
                <li>Third list item to close it out</li>
            </ol>
            <p>And this is a definition list:</p>
            <dl>
                <dt>HyperText Markup Language (HTML)</dt>
                <dd>The language used to describe and define the content of a Web page</dd>
                <dt>Cascading Style Sheets (CSS)</dt>
                <dd>Used to describe the appearance of Web content</dd>
                <dt>JavaScript (JS)</dt>
                <dd>The programming language used to build advanced Web sites and applications</dd>
            </dl>
            <h2>Inline HTML elements</h2>
            <p>HTML defines a long list of available inline tags, a complete list of which can be found on the <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">Mozilla Developer Network</a>.</p>
            <ul>
                <li><strong>To bold text</strong>, use <code class="language-plaintext highlighter-rouge">&lt;strong&gt;</code>.</li>
                <li><em>To italicize text</em>, use <code class="language-plaintext highlighter-rouge">&lt;em&gt;</code>.</li>
                <li>Abbreviations, like <abbr title="HyperText Markup Language">HTML</abbr> should use <code class="language-plaintext highlighter-rouge">&lt;abbr&gt;</code>, with an optional <code class="language-plaintext highlighter-rouge">title</code> attribute for the full phrase.</li>
                <li>Citations, like <cite>— Mark Otto</cite>, should use <code class="language-plaintext highlighter-rouge">&lt;cite&gt;</code>.</li>
                <li><del>Deleted</del> text should use <code class="language-plaintext highlighter-rouge">&lt;del&gt;</code> and <ins>inserted</ins> text should use <code class="language-plaintext highlighter-rouge">&lt;ins&gt;</code>.</li>
                <li>Superscript <sup>text</sup> uses <code class="language-plaintext highlighter-rouge">&lt;sup&gt;</code> and subscript <sub>text</sub> uses <code class="language-plaintext highlighter-rouge">&lt;sub&gt;</code>.</li>
            </ul>
            <p>Most of these elements are styled by browsers with few modifications on our part.</p>
            <h2>Heading</h2>
            <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
            <h3>Sub-heading</h3>
            <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
            <pre><code>Example code block</code></pre>
            <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p> --}}
                </article>

                <article class="blog-post my-2">
                    <h2 class="display-5 link-body-emphasis mb-1" id="fasilitas">Fasilitas Desa</h2>
                    <p class="blog-post-meta">31 Agustus 2023 Oleh <a href="#">Admin</a></p>

                    <img src="{{ asset('images/blog1.jpg') }}" alt=""
                        style="width:100%; height: 320px; object-fit: cover;">
                    <br>
                    <br>
                    <b>Sarana pendidikan :</b>
                    <ul>
                        <li>SMK Negeri 1 Bojongpicung</li>
                        <li>SMP Terbuka</li>
                        <li>SDN Karyajaya</li>
                        <li>SMP Mulyasari</li>
                        <li>SDN Cibinong</li>
                        <li>SDN Melati</li>
                        <li>DTA :</li>
                        Miftahul Anwar, Al - Barokah, Assalam, Al - Hanafiyah, Miftahul Ulum Al Musri, Al Hidayah,
                        Miftahussaadah Al Musri, Miftahussalam, Al Ikhlas, Tarbiyatul Aulad, Ashidiq, Al Falah, Margaluyu Al
                        Mutmainah
                        <li>TKA/RA :</li>
                        Assidiqi'iyah, Nurul Falah, Al Istiqomah, Al Hidayah
                    </ul>

                    <b>Posyandu</b>
                    <p>Tersebar di : Kp. Cibinong, Kp. Nyalindung, Kp. Benong, Kp. Cibiuk, Kp. Cidogdog, Kp.
                        Darmaga, Kp. Cikadu, Kp. Pangawaren, Kp. Rawakotok, Kp. Mekar Mulya, Kp. Sirnagalih, Kp. Cibinong 2,
                        Kp.
                        Citapen</p>

                    <b>Sarana Lapangan</b>
                    <p>Lapangan serbaguna yang terletak di Kampung Cikadu, bersebrangan dengan SDN Cibinong. Lapangan ini menjadi salah satu lapangan terbesar di Desa Sukaratu, sering digunakan untuk acara perayaan 17 Agustus, olahraga, atau untuk bermain saja.</p>
                    <b>PUSTU</b>
                    <p>Puskesmas Pembantu (Pustu) yang terletak di Kampung Pangawaren menjadi satu-satunya pelayanan
                        kesehatan yang tersedia di Desa Sukaratu. Pelayanan yang tersedia antara lain imunisasi, KIA,
                        surveilance, penyuluhan kesehatan, pengecekan kesehatan, pemberdayaan masyarakat, dan sebagainya.
                    </p>
                    <b>Desa Siaga</b>
                    <p>Salah satu program dari Desa Siaga ini merupakan program pelayanan akses ambulance menjemput warga yang sakit ke rumah sakit atau klinik terdekat dengan sistem membayar iuran rutin sebanyak Rp. 1000 agar akomodasi sangat terjangkau. </p>
                    <hr>
                    {{-- <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
          <blockquote>
            <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of it.</p>
          </blockquote>
          <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
          <h3>Example table</h3>
          <p>And don't forget about tables in these posts:</p>
          <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Upvotes</th>
                <th>Downvotes</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Alice</td>
                <td>10</td>
                <td>11</td>
              </tr>
              <tr>
                <td>Bob</td>
                <td>4</td>
                <td>3</td>
              </tr>
              <tr>
                <td>Charlie</td>
                <td>7</td>
                <td>9</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td>Totals</td>
                <td>21</td>
                <td>23</td>
              </tr>
            </tfoot>
          </table>

          <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p> --}}

                </article>

                <article class="blog-post my-2">
                    <h2 class="display-5 link-body-emphasis mb-1"id="kkn">Program Kerja KKN UNPI 2023</h2>
                    <p class="blog-post-meta">31 Agustus 2023 Oleh <a href="#">Admin</a></p>

                    <img src="{{ asset('images/blog2.jpg') }}" alt=""
                        style="width:100%; height: 320px; object-fit: cover;">
                        <br>
                        <br>
                    <b>Digitalisasi Desa</b>
                    <p>Program Kerja KKN UNPI dari IPM Ekonomi yaitu gerakan "Digitalisasi Desa" yakni membuat peluang bagi masyarakat Desa Sukaratu untuk dapat ikut serta dalam berbagai kegiatan yang bersifat Online atau Digital. Dengan hadirnya website Portal UMKM Desa Sukaratu diharapkan warga dapat lebih mengenal dunia digital secara perlahan, dengan bertujuan untuk menampung berbagai usaha masyarakat di Desa Suakaratu.</p>
                    <p></p>
                    {{-- <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
          <ul>
            <li>First list item</li>
            <li>Second list item with a longer description</li>
            <li>Third list item to close it out</li>
          </ul>
          <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p> --}}

                    <hr>
                </article>
                {{--
        <nav class="blog-pagination" aria-label="Pagination">
          <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
          <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Newer</a>
        </nav> --}}

            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-body-tertiary rounded">
                        <h4 class="fst-italic">Contact</h4>
                        <p class="mb-0">Anda dapat menghubungi perangkat desa untuk informasi lebih lengkap <a
                                href="{{ route('contact') }}">disini</a>.</p>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Produk UMKM</h4>
                        <ul class="list-unstyled">
                            @foreach ($products as $item)
                                <li>
                                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                        href="{{ route('umkm.show', $item->id) }}">
                                        <img src="{{ asset('storage/public/productsImages/' . $item->image) }}"
                                            class="bd-placeholder-img"
                                            style="height: 96px; width: 108px; object-fit: cover;">
                                        {{-- <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> --}}
                                        <div class="col-lg-8">
                                            <h6 class="mb-0">{{ $item->name }}</h6>
                                            <small class="text-body-secondary">Rp. {{ $item->price }}</small>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Sosial Media</h4>
                        <ol class="list-unstyled">
                            <li><a href="https://instagram.com">Instagram</a></li>
                            <li><a href="https://facebook.com">Facebook</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
