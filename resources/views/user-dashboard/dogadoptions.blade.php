@include('user-dashboard.userheader')

<body>

    <div class="d-flex">
        @include('user-dashboard.sidebar')
        <div class="main-content">
            <div class="flex-grow-1 p-4">
                <h1 class="mb-4">Dog Adoptions</h1>
                <p class="mb-4">Explore dogs available for adoption in your area.</p>

                <div class="row g-4">
                    <!-- Dog Card 1 -->
                    <div class="col-md-4">
                        <div class="card card-community">
                            <img src="{{ asset('img/3.jpg') }}" class="card-img-top" alt="Dog 1">
                            <div class="card-body">
                                <h5 class="card-title">Buddy</h5>
                                <p class="card-text">Golden Retriever, 2 years old, friendly and playful.</p>
                                <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#adoptModal" data-dog="Buddy">
                                    Adopt
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Dog Card 2 -->
                    <div class="col-md-4">
                        <div class="card card-community">
                            <img src="{{ asset('img/1.jpg') }}" class="card-img-top" alt="Dog 2">
                            <div class="card-body">
                                <h5 class="card-title">Luna</h5>
                                <p class="card-text">Labrador, 3 years old, loves children.</p>
                                <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#adoptModal" data-dog="Luna">
                                    Adopt
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Dog Card 3 -->
                    <div class="col-md-4">
                        <div class="card card-community">
                            <img src="{{ asset('img/2.jpg') }}" class="card-img-top" alt="Dog 3">
                            <div class="card-body">
                                <h5 class="card-title">Charlie</h5>
                                <p class="card-text">Beagle, 1 year old, very energetic and friendly.</p>
                                <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#adoptModal" data-dog="Charlie">
                                    Adopt
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="adoptModal" tabindex="-1" aria-labelledby="adoptModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(15px); border-radius: 16px; color: #f8f9fa; padding: 20px;">
                <div class="modal-header border-0 p-0 mb-3">

                    <h5 class="modal-title" id="adoptModalLabel" style="color: var(--primary); font-weight: 800; font-size: 20px;">Adopt Dog</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <form action="{{ route('dogadoption.submit') }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label for="dogName" class="form-label small">Dog Name</label>
                            <input type="text" class="form-control form-control-sm" id="dogName" name="dogName" readonly>
                        </div>
                        <div class="mb-2">
                            <label for="fullName" class="form-label small">Full Name</label>
                            <input type="text" class="form-control form-control-sm" id="fullName" name="fullName" required value="{{ auth()->user()->name }}">
                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label small">Email</label>
                            <input type="email" class="form-control form-control-sm" id="email" name="email" required value="{{ auth()->user()->email }}">
                        </div>
                        <div class="mb-2">
                            <label for="phone" class="form-label small">Phone</label>
                            <input type="tel" class="form-control form-control-sm" id="phone" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label small">Reason</label>
                            <textarea class="form-control form-control-sm" id="message" name="message" rows="2" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm w-100">Submit Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        var adoptModal = document.getElementById('adoptModal');
        adoptModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            var dogName = button.getAttribute('data-dog');
            adoptModal.querySelector('#dogName').value = dogName;
        });
    </script>