<x-admin>
    <h5 class="text-center text-primary">APPLICATIONS</h5>
    <hr>
    <table class="table align-middle mb-0 bg-white mb-5">
        <thead class="bg-light">
            <tr>
                <th>Name</th>
                <th>Email Address</th>
                <th>Motivation</th>
                <th>Resume</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($applications as $application)
            <tr>
                <td>
                    <p class="fw-bold mb-1">{{ $application->user->name }}</p>
                </td>
                <td>{{ $application->user->email }}</td>
                <td>{{ $application->motivation }}</td>
                <td>
                    <a href="/storage/{{ $application->resume }}">
                        <button class="btn btn-link">
                            download
                        </button>
                    </a>
                </td>
                <td>
                    <form action="{{ route('therapist.store') }}" method="POST">
                        @csrf
                        <input type="text" class="hidden" name="id" value="{{ $application->id }}">
                        <button type="submit" class="btn btn-link btn-sm btn-rounded">
                            Approve
                        </button>
                    </form>

                    <span>
                        <form action="{{ route('application.destroy', $application) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-link btn-sm btn-rounded">
                                Delete
                            </button>
                        </form>
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        <!-- <a href="{{ route('application.create') }}">
            <button type="submit" name="add" class="btn btn-outline-primary btn" aria-controls="#picker-editor"> ADD application</button>
        </a> -->
    </div>
</x-admin>