<x-app-layouts>

    <section class="breadcrumb border-bottom p-0 d-block section-bg position-relative z-index-1">

        <div class="breadcrumb-two">
            <img src="assets/images/gradients/breadcrumb-gradient-bg.png" alt="" class="bg--gradient">
            <div class="container container-two">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="breadcrumb-two-content text-center">

                            <ul class="breadcrumb-list flx-align gap-2 mb-2 justify-content-center">
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <a href="{{ route('home') }}"
                                        class="breadcrumb-list__link text-body hover-text-main">Home</a>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-list__icon font-10"><i
                                            class="fas fa-chevron-right"></i></span>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-list__text">Message</span>
                                </li>
                            </ul>

                            <h3 class="breadcrumb-two-content__title mb-0 text-capitalize">Message</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact padding-t-60 padding-b-60 section-bg position-relative z-index-1 overflow-hidden">
        <div class="container container-two">
            <div class="table-responsive">
                <table class="table text-dark">
                    <thead class="thead-dark">
                        <tr>
                            <td>#</td>
                            <td>name</td>
                            <td>email</td>
                            <td>message</td>
                            <td>date</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $message)
                            <tr>
                                <td>#</td>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->message }}</td>
                                <td>{{ $message->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>


</x-app-layouts>
