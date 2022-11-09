<x-admin>
    <h5 class="text-center text-primary">AVAILABLE SERVICES</h5>
    <hr>
    <table class="table align-middle mb-0 bg-white mb-5">
        <thead class="bg-light">
            <tr>
                <th>Name</th>
                <th>Brief Description</th>
                <th>Full Description</th>

                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
            <tr>
                <td>
                    <p class="fw-bold mb-1">{{ $service->name }}</p>
                </td>
                <td>{{ $service->brief_description }}</td>
                <td>{{ $service->full_description }}</td>
                <td>
                    <span>
                        <a href="{{ route('service.edit', $service) }}">
                            <button type="button" class="btn btn-link btn-sm btn-rounded">
                                Edit
                            </button>
                        </a>
                    </span>
                    <span>
                        <form action="{{ route('service.destroy', $service) }}" method="POST">
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
        <a href="{{ route('service.create') }}">
            <button type="submit" name="add" class="btn btn-outline-primary btn" aria-controls="#picker-editor"> ADD SERVICE</button>
        </a>
    </div>
</x-admin>