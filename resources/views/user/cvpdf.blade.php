<!DOCTYPE html>
<html>
<head>
    <title>CV</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles can be added here */
    </style>
</head>
<body class="p-8">
<div class="max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold mb-4"> Personal Information :</h2>
    <div class="mb-8">
        <!-- Profile Photo -->
        <img src="{{ asset('/images/' . $user->candidate->photo_profil) }}" alt="Profile Photo" class="w-32 h-32 rounded-full mx-auto mb-4">
        <h1 class="text-xl font-bold">{{ $user->name }}</h1>
        <p class="text-gray-600">{{ $user->email }}</p>


    </div>

    <div>
        <h2 class="text-xl font-bold mb-4">Education:</h2>
        @if($cursuses)
            <ul class="list-disc pl-8">
                @foreach($cursuses as $cursus)
                    <li>{{ $cursus->diplome }} - {{ $cursus->etablissement }}</li>
                @endforeach
            </ul>
        @else
            <p>No education information available.</p>
        @endif

        <h2 class="text-xl font-bold mb-4">Experience:</h2>
        <ul class="list-disc pl-8">
            @if($experiences)
                <ul class="list-disc pl-8">
                    @foreach($experiences as $experience)
                        <li>{{ $experience->poste }} at {{ $experience->entreprise }}</li>
                    @endforeach
                </ul>
            @else
                <p>No experience information available.</p>
            @endif
        </ul>

        <h2 class="text-xl font-bold mb-4">Languages:</h2>
        <ul class="list-disc pl-8">
            @if($languages)
                <ul class="list-disc pl-8">
                    @foreach($languages as $language)
                        <li>{{ $language->langue }} - Level: {{ $language->niveau }}</li>
                    @endforeach
                </ul>
            @else
                <p>No language information available.</p>
            @endif
        </ul>

        <h2 class="text-xl font-bold mb-4">Competences:</h2>
        <ul class="list-disc pl-8">
            @if($competences)
                <ul class="list-disc pl-8">
                    @foreach($competences as $competence)
                        <li>{{ $competence->nom }} - Level: {{ $competence->niveau }}</li>
                    @endforeach
                </ul>
            @else
                <p>No competence information available.</p>
            @endif
        </ul>
    </div>
    <div class="text-center mt-8">
        <a href="{{ route('generate.pdf') }}" class="inline-block px-4 py-2 bg-blue-500 text-white rounded-md shadow-md hover:bg-blue-600">Download PDF</a>
    </div>

</div>
</body>
</html>
