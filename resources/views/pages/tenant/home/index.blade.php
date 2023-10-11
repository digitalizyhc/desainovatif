<x-tenant-layout>
    <div class="container-fluid py-4">
        {{-- <div class="alert alert-success" role="alert">
            Hai {{ tenant('name') }}! Welcome to Tenant Home Page!
        </div> --}}
        <div class="container">
            <section class="home" class="mt-5" data-aos="fade-up" data-aos-duration="1400">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="row">
                            <div class="col-10 offset-1 hero">
                                <h1 class="text-capitalize">Desa<br>{{ tenant('name') }}</h1>
                                <p class="fw-light fs-4">
                                    Temukan inspirasi dan keunikan yang mengubah wajah desa menjadi pusat perkembangan
                                    dan kemajuan.
                                </p>
                                <a href="#about" class="btn btn-success fw-medium">
                                    Selengkapnya
                                    <i class="align-middle fe fe-arrow-right" style="height: 20px"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <img src="{{ asset('assets/img/photos/home-1.png') }}" alt="home-1" class="img-fluid">
                    </div>
                </div>
            </section>
            <section class="home" data-aos="fade-right" data-aos-duration="1000" id="about">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-12 col-md-4 text-center text-md-end order-last order-md-first">
                                <h4 class="fw-bold">Muhammad Yogi</h4>
                                <p class="fw-normal text-capitalize">Kepala Desa {{ tenant('name') }}</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <img src="{{ asset('assets/img/photos/home-2.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <img src="{{ asset('assets/img/icons/quote.png') }}" alt="">
                        <h4 class="fw-bold my-4">Tentang <span class="text-color-primary">Desa</span></h4>
                        <p>Dengan adanya website ini, kami berharap dapat memberikan informasi yang berguna dan akurat
                            bagi masyarakat, serta mempermudah akses bagi masyarakat untuk berinteraksi dan
                            berkoordinasi dengan pemerintah desa.</p>
                        <p>Terima kasih atas kunjungan Anda dan semoga website ini dapat memberikan manfaat bagi Anda
                            semua.</p>
                        <h4 class="fw-bold">Pilar Program Desa</h4>
                        <div class="row justify-content-center">
                            <div class="my-2 col-6 col-sm-4 text-center text-md-start">
                                <div class="card text-center program-card">
                                    <div class="mx-auto mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="57"
                                            viewBox="0 0 56 57" fill="none">
                                            <g clip-path="url(#clip0_374_1743)">
                                                <path
                                                    d="M48.9998 16.675C49.6187 16.675 50.2122 16.9208 50.6497 17.3584C51.0873 17.796 51.3332 18.3895 51.3332 19.0083C51.3332 19.6271 51.0873 20.2206 50.6497 20.6582C50.2122 21.0958 49.6187 21.3416 48.9998 21.3416V44.675C49.6187 44.675 50.2122 44.9208 50.6497 45.3584C51.0873 45.796 51.3332 46.3895 51.3332 47.0083C51.3332 47.6271 51.0873 48.2206 50.6497 48.6582C50.2122 49.0958 49.6187 49.3416 48.9998 49.3416H6.99984C6.381 49.3416 5.78751 49.0958 5.34992 48.6582C4.91234 48.2206 4.6665 47.6271 4.6665 47.0083C4.6665 46.3895 4.91234 45.796 5.34992 45.3584C5.78751 44.9208 6.381 44.675 6.99984 44.675V21.3416C6.381 21.3416 5.78751 21.0958 5.34992 20.6582C4.91234 20.2206 4.6665 19.6271 4.6665 19.0083C4.6665 18.3895 4.91234 17.796 5.34992 17.3584C5.78751 16.9208 6.381 16.675 6.99984 16.675H48.9998ZM16.3332 26.0083C15.7143 26.0083 15.1208 26.2541 14.6833 26.6917C14.2457 27.1293 13.9998 27.7228 13.9998 28.3416V44.675H18.6665V28.3416C18.6665 27.7228 18.4207 27.1293 17.9831 26.6917C17.5455 26.2541 16.952 26.0083 16.3332 26.0083ZM27.9998 26.0083C27.381 26.0083 26.7875 26.2541 26.3499 26.6917C25.9123 27.1293 25.6665 27.7228 25.6665 28.3416V44.675H30.3332V28.3416C30.3332 27.7228 30.0873 27.1293 29.6497 26.6917C29.2122 26.2541 28.6187 26.0083 27.9998 26.0083ZM39.6665 26.0083C39.0477 26.0083 38.4542 26.2541 38.0166 26.6917C37.579 27.1293 37.3332 27.7228 37.3332 28.3416V44.675H41.9998V28.3416C41.9998 27.7228 41.754 27.1293 41.3164 26.6917C40.8788 26.2541 40.2853 26.0083 39.6665 26.0083ZM41.9998 9.67497C42.6187 9.67497 43.2122 9.92081 43.6497 10.3584C44.0873 10.796 44.3332 11.3895 44.3332 12.0083C44.3332 12.6271 44.0873 13.2206 43.6497 13.6582C43.2122 14.0958 42.6187 14.3416 41.9998 14.3416H13.9998C13.381 14.3416 12.7875 14.0958 12.3499 13.6582C11.9123 13.2206 11.6665 12.6271 11.6665 12.0083C11.6665 11.3895 11.9123 10.796 12.3499 10.3584C12.7875 9.92081 13.381 9.67497 13.9998 9.67497H41.9998Z"
                                                    fill="#42AE68" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_374_1743">
                                                    <rect width="56" height="56" fill="white"
                                                        transform="translate(0 0.341644)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <p>Penyelenggaraan Pemerintahan Desa</p>
                                </div>
                            </div>
                            <div class="my-2 col-6 col-sm-4 text-center">
                                <div class="card text-center program-card">
                                    <div class="mx-auto mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="57"
                                            viewBox="0 0 56 57" fill="none">
                                            <path
                                                d="M28.0002 35.3416C17.6868 35.3416 9.3335 39.5183 9.3335 44.675V49.3416H46.6668V44.675C46.6668 39.5183 38.3135 35.3416 28.0002 35.3416ZM18.6668 21.3416C18.6668 23.817 19.6502 26.191 21.4005 27.9413C23.1508 29.6917 25.5248 30.675 28.0002 30.675C30.4755 30.675 32.8495 29.6917 34.5998 27.9413C36.3502 26.191 37.3335 23.817 37.3335 21.3416M26.8335 5.00832C26.1335 5.00832 25.6668 5.49832 25.6668 6.17498V13.175H23.3335V7.34165C23.3335 7.34165 18.0835 9.34832 18.0835 16.0916C18.0835 16.0916 16.3335 16.4183 16.3335 19.0083H39.6668C39.5502 16.4183 37.9168 16.0916 37.9168 16.0916C37.9168 9.34832 32.6668 7.34165 32.6668 7.34165V13.175H30.3335V6.17498C30.3335 5.49832 29.8902 5.00832 29.1668 5.00832H26.8335Z"
                                                fill="#42AE68" />
                                        </svg>
                                    </div>
                                    <p>Pelaksanaan Pembangunan Desa</p>
                                </div>
                            </div>
                            <div class="my-2 col-6 col-sm-4 text-center text-md-end">
                                <div class="card text-center program-card">
                                    <div class="mx-auto mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="57"
                                            viewBox="0 0 56 57" fill="none">
                                            <path
                                                d="M34.4258 23.675C36.6798 23.675 38.5092 25.5043 38.5092 27.7583V38.8393C38.5092 41.6247 37.4027 44.296 35.4331 46.2656C33.4635 48.2352 30.7922 49.3416 28.0068 49.3416C25.2214 49.3416 22.5501 48.2352 20.5806 46.2656C18.611 44.296 17.5045 41.6247 17.5045 38.8393V27.7583C17.5045 25.5043 19.3315 23.675 21.5878 23.675H34.4258ZM16.6388 23.675C15.7984 24.6864 15.2929 25.9338 15.1922 27.245L15.1688 27.7583V38.8393C15.1688 40.8156 15.6168 42.687 16.4148 44.3576C15.0318 44.7276 13.5822 44.7746 12.1782 44.4949C10.7741 44.2152 9.45322 43.6163 8.31758 42.7445C7.18194 41.8728 6.26201 40.7515 5.62892 39.4675C4.99582 38.1834 4.66653 36.771 4.6665 35.3393V27.7583C4.66654 26.7335 5.0519 25.7462 5.74609 24.9924C6.44028 24.2386 7.39254 23.7733 8.41384 23.689L8.74984 23.675H16.6388ZM39.3748 23.675H47.2498C49.5038 23.675 51.3332 25.5043 51.3332 27.7583V35.3416C51.3335 36.7724 51.0049 38.184 50.3727 39.4675C49.7406 40.751 48.8219 41.872 47.6875 42.7438C46.5531 43.6157 45.2335 44.2151 43.8306 44.4957C42.4276 44.7764 40.979 44.7307 39.5965 44.3623C40.2965 42.897 40.7258 41.2823 40.8215 39.5743L40.8425 38.8393V27.7583C40.8425 26.2066 40.2942 24.7833 39.3748 23.675ZM27.9998 7.34164C29.8564 7.34164 31.6368 8.07914 32.9496 9.3919C34.2623 10.7047 34.9998 12.4851 34.9998 14.3416C34.9998 16.1982 34.2623 17.9786 32.9496 19.2914C31.6368 20.6041 29.8564 21.3416 27.9998 21.3416C26.1433 21.3416 24.3628 20.6041 23.0501 19.2914C21.7373 17.9786 20.9998 16.1982 20.9998 14.3416C20.9998 12.4851 21.7373 10.7047 23.0501 9.3919C24.3628 8.07914 26.1433 7.34164 27.9998 7.34164ZM43.1665 9.67498C44.7136 9.67498 46.1973 10.2896 47.2913 11.3835C48.3853 12.4775 48.9998 13.9612 48.9998 15.5083C48.9998 17.0554 48.3853 18.5391 47.2913 19.6331C46.1973 20.7271 44.7136 21.3416 43.1665 21.3416C41.6194 21.3416 40.1357 20.7271 39.0417 19.6331C37.9478 18.5391 37.3332 17.0554 37.3332 15.5083C37.3332 13.9612 37.9478 12.4775 39.0417 11.3835C40.1357 10.2896 41.6194 9.67498 43.1665 9.67498ZM12.8332 9.67498C14.3803 9.67498 15.864 10.2896 16.958 11.3835C18.0519 12.4775 18.6665 13.9612 18.6665 15.5083C18.6665 17.0554 18.0519 18.5391 16.958 19.6331C15.864 20.7271 14.3803 21.3416 12.8332 21.3416C11.2861 21.3416 9.80234 20.7271 8.70838 19.6331C7.61442 18.5391 6.99984 17.0554 6.99984 15.5083C6.99984 13.9612 7.61442 12.4775 8.70838 11.3835C9.80234 10.2896 11.2861 9.67498 12.8332 9.67498Z"
                                                fill="#42AE68" />
                                        </svg>
                                    </div>
                                    <p>Pembinaan Kemasyarakatan Desa</p>
                                </div>
                            </div>
                            <div class="my-2 col-6 col-sm-4 text-center text-md-start">
                                <div class="card text-center program-card">
                                    <div class="mx-auto mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="57"
                                            viewBox="0 0 56 57" fill="none">
                                            <path
                                                d="M42.0002 51.675C43.2378 51.675 44.4248 51.1833 45.3 50.3081C46.1752 49.433 46.6668 48.246 46.6668 47.0083V9.67497C46.6668 8.43729 46.1752 7.25031 45.3 6.37514C44.4248 5.49997 43.2378 5.0083 42.0002 5.0083H28.0002V21.3416L22.1668 17.8416L16.3335 21.3416V5.0083H14.0002C12.7625 5.0083 11.5755 5.49997 10.7003 6.37514C9.82516 7.25031 9.3335 8.43729 9.3335 9.67497V47.0083C9.3335 48.246 9.82516 49.433 10.7003 50.3081C11.5755 51.1833 12.7625 51.675 14.0002 51.675H42.0002Z"
                                                fill="#42AE68" />
                                        </svg>
                                    </div>
                                    <p>Pemberdayaan Masyarakat Desa</p>
                                </div>
                            </div>
                            <div class="my-2 col-6 col-sm-4 text-center">
                                <div class="card text-center program-card">
                                    <div class="mx-auto mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="57"
                                            viewBox="0 0 56 57" fill="none">
                                            <g clip-path="url(#clip0_374_1762)">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M26.362 5.4633C27.2828 5.11879 28.2888 5.07388 29.2367 5.33497L29.638 5.4633L45.9713 11.5883C46.7995 11.8988 47.5224 12.4383 48.0557 13.1439C48.589 13.8495 48.9108 14.6922 48.9837 15.5736L49 15.9586V28.4723C48.9999 32.2533 47.979 35.9641 46.0451 39.2131C44.1111 42.462 41.3359 45.1286 38.0123 46.9313L37.3917 47.2556L29.5657 51.1686C29.1348 51.3838 28.6641 51.5077 28.1831 51.5326C27.7021 51.5575 27.2211 51.4828 26.7703 51.3133L26.4343 51.1686L18.6083 47.2556C15.2264 45.5646 12.3638 42.9919 10.3227 39.8091C8.28154 36.6262 7.13762 32.9513 7.01167 29.1723L7 28.4723V15.9586C7.00001 15.0746 7.25113 14.2088 7.72411 13.4619C8.1971 12.715 8.87249 12.1179 9.67167 11.74L10.0287 11.5883L26.362 5.4633ZM36.0103 20.476L25.2817 31.2046L21.1563 27.0793C20.7185 26.6418 20.1248 26.3961 19.5058 26.3963C18.8869 26.3965 18.2934 26.6426 17.8558 27.0805C17.4183 27.5183 17.1726 28.112 17.1729 28.731C17.1731 29.3499 17.4192 29.9434 17.857 30.381L23.4663 35.9903C23.7047 36.2288 23.9877 36.4179 24.2992 36.547C24.6106 36.6761 24.9445 36.7425 25.2817 36.7425C25.6188 36.7425 25.9527 36.6761 26.2642 36.547C26.5756 36.4179 26.8586 36.2288 27.097 35.9903L39.3097 23.7753C39.5325 23.5601 39.7103 23.3026 39.8326 23.0179C39.9549 22.7332 40.0192 22.4271 40.0219 22.1172C40.0246 21.8074 39.9656 21.5002 39.8483 21.2134C39.7309 20.9267 39.5577 20.6661 39.3386 20.447C39.1195 20.228 38.859 20.0547 38.5722 19.9374C38.2855 19.8201 37.9782 19.761 37.6684 19.7637C37.3586 19.7664 37.0524 19.8308 36.7677 19.9531C36.483 20.0754 36.2256 20.2531 36.0103 20.476Z"
                                                    fill="#42AE68" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_374_1762">
                                                    <rect width="56" height="56" fill="white"
                                                        transform="translate(0 0.341644)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <p>Penanggulangan Bencana</p>
                                </div>
                            </div>
                            <div class="my-2 col-6 col-sm-4 text-center text-md-end">
                                <div class="card text-center program-card" style="background-color: #42AE68">
                                    <div class="mx-auto mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="56" height="57"
                                            viewBox="0 0 56 57" fill="none">
                                            <path
                                                d="M42 35.3416V42.3416M42 42.3416V49.3416M42 42.3416H35M42 42.3416H49"
                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M11.6665 12.0083C9.80999 12.0083 8.02951 12.7458 6.71676 14.0586C5.404 15.3713 4.6665 17.1518 4.6665 19.0083V37.675C4.6665 39.5315 5.404 41.312 6.71676 42.6247C8.02951 43.9375 9.80999 44.675 11.6665 44.675H28.1935C28.0643 43.9039 27.9995 43.1234 27.9998 42.3416C27.9998 39.663 28.7512 37.1616 30.0555 35.036C29.0084 35.3571 27.9006 35.4282 26.8211 35.2435C25.7415 35.0587 24.7204 34.6233 23.8396 33.9723C22.9589 33.3212 22.2432 32.4726 21.75 31.4947C21.2568 30.5168 20.9999 29.4369 20.9998 28.3416C21.0012 27.3354 21.2196 26.3412 21.64 25.427C22.0604 24.5127 22.6729 23.6998 23.4359 23.0438C24.1989 22.3877 25.0944 21.9038 26.0613 21.6252C27.0282 21.3465 28.0438 21.2796 29.039 21.4289C30.0341 21.5783 30.9853 21.9405 31.8278 22.4908C32.6703 23.0411 33.3842 23.7665 33.9209 24.6177C34.4577 25.4689 34.8046 26.4258 34.938 27.4231C35.0715 28.4205 34.9883 29.435 34.6942 30.3973C36.8923 29.0493 39.4213 28.3377 41.9998 28.3416C45.5862 28.3416 48.8575 29.6903 51.3332 31.907V19.0083C51.3332 17.1518 50.5957 15.3713 49.2829 14.0586C47.9702 12.7458 46.1897 12.0083 44.3332 12.0083H11.6665ZM27.9998 26.0083C27.381 26.0083 26.7875 26.2541 26.3499 26.6917C25.9123 27.1293 25.6665 27.7228 25.6665 28.3416C25.6665 28.9605 25.9123 29.554 26.3499 29.9916C26.7875 30.4291 27.381 30.675 27.9998 30.675C28.6187 30.675 29.2122 30.4291 29.6498 29.9916C30.0873 29.554 30.3332 28.9605 30.3332 28.3416C30.3332 27.7228 30.0873 27.1293 29.6498 26.6917C29.2122 26.2541 28.6187 26.0083 27.9998 26.0083Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                    <p class="text-white">Realisasi APBD</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @if (@$firstArticle)
                <section class="home" data-aos="zoom-in" data-aos-duration="900">
                    <h3 class="fw-bold text-center pb-5">Berita <span class="text-color-primary text-capitalize">Desa {{ tenant('name') }}</span>
                    </h3>
                    <div class="row justify-content-center my-5">
                        <div class="col-12 {{ $articles->count() > 0 ? 'col-md-7' : 'col-md-12' }} px-0 h-100 mb-2">
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-md-6">
                                        <img src="{{ $firstArticle->cover_url }}" class="img-fluid rounded-start"
                                            alt="...">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body h-100" style="background-color: #F6F6F6;">
                                            <p class="text-color-primary">Berita Hari Ini</p>
                                            <a href="{{ route('tenant.berita-detail', $firstArticle->slug) }}"
                                                class="card-title fw-bold fs-3 text-decoration-none stretched-link">{{ $firstArticle->title }}</a>
                                            <p class="card-text">{{ Str::limit(strip_tags($firstArticle->body), 100) }}
                                            </p>
                                            <p class="card-text mb-0 pb-0"><small
                                                    class="text-body-secondary">{{ $firstArticle->created_at->isoFormat('dddd, D MMMM Y') }}</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-5 px-0">
                            <div class="d-flex flex-column justify-content-between">
                                @foreach ($articles as $article)
                                    <div class="card mb-1">
                                        <div class="row g-0">
                                            <div class="col-md-4" style="background-color: #ffffff">
                                                <img src="{{ $article->cover_url }}" class="img-fluid rounded-start"
                                                    alt="..." height="100%">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body h-100 d-flex flex-column card-news">
                                                    <p class="text-color-primary mb-0">Berita Hari Ini</p>
                                                    <a href="{{ route('tenant.berita-detail', $article->slug) }}"
                                                        class="card-title fw-bold text-decoration-none stretched-link">{{ $article->title }}</a>
                                                    <p class="card-text pb-0 mb-0 mt-auto"><small
                                                            class="text-body-secondary">{{ $article->created_at->isoFormat('dddd, D MMMM Y') }}</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
            @endif
            @if (@$products->count() > 0)
                <section class="home" data-aos="zoom-in" data-aos-duration="900">
                    <div class="text-center">
                        <h3 class="fw-bold text-center my-4">Produk <span class="text-color-primary">Unggulan</span>
                        </h3>
                        <div class="row justify-content-center align-items-center my-5">
                            @foreach ($products as $product)
                                <div class="col-12 col-sm-6 col-md-3 my-3 my-md-0">
                                    <div class="card text-start">
                                        <img src="{{ $product->product_cover_url }}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body d-flex flex-column">
                                            <a href="{{ route('tenant.produk-detail', $product->slug) }}"
                                                class="card-title text-decoration-none fw-semibold stretched-link">{{ $product->name }}</a>
                                            <p class="card-text fw-bold text-color-primary">
                                                {{ rupiahFormat($product->end_price, 'Rp. ') }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a href="{{ route('tenant.produk') }}" class="btn btn-outline-success fw-semibold">Lihat
                            Lebih Banyak Produk</a>
                    </div>
                </section>
            @endif
            <section class="home" data-aos="fade-up" data-aos-duration="800">
                <div class="my-5">
                    <div class="row justify-content-center">
                        <h3 class="fw-bold text-center my-4">Infografis <span class="text-color-primary">Desa
                                {{ tenant('name') }}</span></h3>
                        <div class="col-md-10 text-center">
                            <div class="background-map">
                                <div class="row justify-content-center">
                                    <div class="col-6 col-md-2 my-4">
                                        <h1 class="text-blue-secondary">523m2</h1>
                                        <p class="mb-1 text-dark-blue">Luas kas</p>
                                        <img src="{{ asset('assets/img/photos/map-helper.png') }}" alt=""
                                            class="d-block mx-auto" style="width: 20px">
                                        <img src="{{ asset('assets/img/icons/map2.png') }}" alt=""
                                            class="d-block mx-auto my-2">
                                    </div>
                                    <div class="col-6 col-md-2 my-4">
                                        <h1 class="text-green-third">1023m2</h1>
                                        <p class="mb-1 text-dark-blue">Luas tanah</p>
                                        <img src="{{ asset('assets/img/photos/map-helper.png') }}" alt=""
                                            class="d-block mx-auto" style="width: 20px">
                                        <img src="{{ asset('assets/img/icons/map1.png') }}" alt=""
                                            class="d-block mx-auto my-2" width="104px">
                                    </div>
                                    <div class="col-6 col-md-2 my-4">
                                        <h1 class="text-gray">1048</h1>
                                        <p class="mb-1 text-dark-blue">Luas DHKP</p>
                                        <img src="{{ asset('assets/img/photos/map-helper.png') }}" alt=""
                                            class="d-block mx-auto" style="width: 20px">
                                        <img src="{{ asset('assets/img/icons/map3.png') }}" alt=""
                                            class="d-block mx-auto my-2">
                                    </div>
                                    <div class="col-6 col-md-2 my-4">
                                        <h1 class="text-yellow">2000</h1>
                                        <p class="mb-1 text-dark-blue">Jumllah Penduduk</p>
                                        <img src="{{ asset('assets/img/photos/map-helper.png') }}" alt=""
                                            class="d-block mx-auto" style="width: 20px">
                                        <img src="{{ asset('assets/img/icons/map4.png') }}" alt=""
                                            class="d-block mx-auto my-2">
                                    </div>
                                    <div class="col-6 col-md-2 my-4">
                                        <h1 class="text-red">1200</h1>
                                        <p class="mb-1 text-dark-blue">Penduduk laki-laki</p>
                                        <img src="{{ asset('assets/img/photos/map-helper.png') }}" alt=""
                                            class="d-block mx-auto" style="width: 20px">
                                        <img src="{{ asset('assets/img/icons/map5.png') }}" alt=""
                                            class="d-block mx-auto my-2">
                                    </div>
                                    <div class="col-6 col-md-2 my-4">
                                        <h1 class="text-blue">800</h1>
                                        <p class="mb-1 text-dark-blue">Penduduk Perempuan</p>
                                        <img src="{{ asset('assets/img/photos/map-helper.png') }}" alt=""
                                            class="d-block mx-auto" style="width: 20px">
                                        <img src="{{ asset('assets/img/icons/map6.png') }}" alt=""
                                            class="d-block mx-auto my-2">
                                    </div>
                                </div>
                            </div>
                            <h4 class="fw-semibold d-inline-block me-2 mt-5">Kunjungi Informasi tentang Infografis</h4>
                            <a href="{{ route('tenant.infografis') }}" class="btn btn-outline-success fw-semibold">
                                Selengkapnya
                                <i class="align-middle fe fe-arrow-right" style="height: 20px"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-tenant-layout>
