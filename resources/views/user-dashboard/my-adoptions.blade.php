@include('user-dashboard.userheader')

<body>
    @include('user-dashboard.sidebar')
    <div class="main-content p-4">

        <div class="page-header mb-4">
            <h2><i class="bi bi-heart-fill"></i> My Adoptions</h2>
            <p class="text-light opacity-75">All the dogs you have adopted and their statuses.</p>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Dog Cards -->
        <div class="row g-4 mb-4">
            @forelse($adoptions as $adopt)
            <div class="col-md-4">
                <div class="card-glass dog-card">
                    
                    <h5 class="mt-3">{{ $adopt->dog_name }}</h5>
                    <p>Adopted on: {{ $adopt->created_at->format('Y-m-d') }}</p>
                    <span class="badge bg-warning">{{ $adopt->status }}</span>
                </div>
            </div>
            @empty
            <p class="text-light">You have not adopted any dogs yet.</p>
            @endforelse
        </div>

        <!-- Recent Adoptions Table -->
        <div class="card-glass p-4">
            <h4 class="mb-3">All Adoptions</h4>
            <table class="table table-custom">
                <thead>
                    <tr>
                        <th>Dog Name</th>
                        <th>Reason</th>
                        <th>Status</th>
                        <th>Date Adopted</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($adoptions as $adopt)
                        <tr>
                            <td>{{ $adopt->dog_name }}</td>
                            <td>{{ $adopt->reason }}</td>
                            <td>{{ $adopt->status }}</td>
                            <td>{{ $adopt->created_at->format('Y-m-d') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No adoptions yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</body>
</html>