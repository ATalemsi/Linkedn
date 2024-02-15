<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('CV') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8   shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <a href="{{ route('cv.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Download CV PDF</a>
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-700 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">Cursus List</h2>
                    <section  id="cursusList" class="space-y-6" >

                    </section>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>

                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Cursus Education') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __("Add New Cursus Education") }}
                            </p>
                        </header>
                        <form id="cvForm" method="post"  class="mt-6 space-y-6">
                            @csrf
                            <div>
                                <x-input-label for="diplome" :value="__('Diplome')" />
                                <x-text-input id="diplome" name="diplome" type="text" class="mt-1 block w-full"  required autofocus autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('diplome')" />
                            </div>

                            <div>
                                <x-input-label for="etablissement" :value="__('Etablissement')" />
                                <x-text-input id="etablissement" name="etablissement" type="text" class="mt-1 block w-full"   />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                            </div>

                            <div>
                                <x-input-label for="date_obtention" :value="__('Date obtention')" />
                                <x-text-input id="date_obtention" name="date_obtention" type="date" class="mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('date_obtention')" />

                            </div>

                            <div class="flex items-center gap-4">
                                <button id="submitBtn" type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150" >Save</button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-700 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">Competence List</h2>
                    <section  id="competenceList" class="space-y-6" >

                    </section>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>

                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Competence') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __("Add New Competence") }}
                            </p>
                        </header>
                        <form id="competenceForm" method="post"  class="mt-6 space-y-6">
                            @csrf
                            <div>
                                <x-input-label for="nom" :value="__('Name')" />
                                <x-text-input id="nom" name="nom" type="text" class="mt-1 block w-full"  />
                                <x-input-error class="mt-2" :messages="$errors->get('nom')" />
                            </div>

                            <div>
                                <x-input-label for="niveau" :value="__('Niveau')" />
                                <x-text-input id="niveau" name="niveau" type="text" class="mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('niveau')" />

                            </div>


                            <div class="flex items-center gap-4">
                                <button id="submitCompetenceBtn" type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150" >Save</button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-700 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">Experience List</h2>
                    <section  id="experienceList" class="space-y-6" >

                    </section>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>

                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Experience') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __("Add New Experience") }}
                            </p>
                        </header>
                        <form id="experienceForm" method="post"  class="mt-6 space-y-6">
                            @csrf
                            <div>
                                <x-input-label for="poste" :value="__('Poste')" />
                                <x-text-input id="poste" name="poste" type="text" class="mt-1 block w-full"  />
                                <x-input-error class="mt-2" :messages="$errors->get('poste')" />
                            </div>

                            <div>
                                <x-input-label for="entreprise" :value="__('Entreprise')" />
                                <x-text-input id="entreprise" name="entreprise" type="text" class="mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('entreprise')" />
                            </div>

                            <div>
                                <x-input-label for="date_debut" :value="__('Date de debut')" />
                                <x-text-input id="date_debut" name="date_debut" type="date" class="mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('date_debut')" />
                            </div>
                            <div>
                                <x-input-label for="date_fin" :value="__('Date de fin')" />
                                <x-text-input id="date_fin" name="date_fin" type="date" class="mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('date_fin')" />
                            </div>
                            <div class="flex items-center gap-4">
                                <button id="submitExperienceBtn" type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150" >Save</button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-700 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">Language List</h2>
                    <section  id="languageList" class="space-y-6" >

                    </section>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>

                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Language') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __("Add New Language") }}
                            </p>
                        </header>
                        <form id="languageForm" method="post"  class="mt-6 space-y-6">
                            @csrf
                            <div>
                                <x-input-label for="langue" :value="__('Langue')" />
                                <x-text-input id="langue" name="langue" type="text" class="mt-1 block w-full"  />
                                <x-input-error class="mt-2" :messages="$errors->get('langue')" />
                            </div>

                            <div>
                                <x-input-label for="niveau" :value="__('Niveau')" />
                                <select id="niveau" name="niveau"
                                        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                                        >
                                    <option value="Beginner">Beginner</option>
                                    <option value="Intermediate">Intermediate</option>
                                    <option value="Advanced">Advanced</option>
                                    <option value="Fluent">Fluent</option>
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('niveau')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <button id="submitLanguageBtn" type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150" >Save</button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#submitLanguageBtn').click(function(e) {
            e.preventDefault();

            var formData = $('#languageForm').serialize();

            $.ajax({
                type: 'POST',
                url: '{{ route('language.store') }}',
                data: formData,
                success: function(response) {
                    // Handle success response
                    console.log(response);
                    // Refresh language list after successful submission
                    getLanguageData();
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error(xhr.responseText);
                }
            });
        });

        // Function to fetch language data via AJAX
        function getLanguageData() {
            $.ajax({
                type: 'GET',
                url: '{{ route('getUserLanguage') }}',
                success: function(response) {
                    // Handle success response
                    console.log(response);
                    // Render language data in the HTML
                    renderLanguageList(response);
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error(xhr.responseText);
                }
            });
        }

        getLanguageData();

        // Function to render language list in HTML
        function renderLanguageList(languageData) {
            var languageListHTML =
                '<div class="border-t border-gray-300 dark:border-gray-600">';
            languageData.forEach(function(language) {
                languageListHTML +=
                    '<div class="py-2 relative border-b border-gray-300 dark:border-gray-600">';
                languageListHTML += '<p class="mt-1 text-semibold text-gray-600 dark:text-gray-400"><span class="mt-1 text-semibold text-gray-600 dark:text-gray-200">Language:</span> ' + language
                    .langue + '</p>';
                languageListHTML += '<p class="mt-1 text-semibold text-gray-600 dark:text-gray-400"><span class="mt-1 text-semibold text-gray-600 dark:text-gray-200">Proficiency:</span> ' + language
                    .niveau + '</p>';
                languageListHTML +=
                    '<button class="deleteLanguageBtn bg-red-500 w-fit absolute bottom-0 right-0 m-4 text-white px-2 py-1 rounded" data-id="' +
                    language.id + '">Delete</button>'; // Add delete button

                languageListHTML += '</div>';
            });
            languageListHTML += '</div>';
            $('#languageList').html(languageListHTML);


            $('.deleteLanguageBtn').click(function() {
                console.log('fedsc');
                var languageId = $(this).data('id'); // Get the language ID from the data attribute
                deleteLanguage(languageId); // Call function to delete language
            });
        }
        // Function to delete language via AJAX
        function deleteLanguage(languageId) {
            console.log(languageId);
            $.ajax({
                type: 'DELETE',
                url: "{{ route('language.destroy', ':languageId') }}".replace(
                    ':languageId', languageId),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    // Handle success response
                    console.log(response);
                    // Show SweetAlert for success
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.message,
                        showConfirmButton: false,
                        timer: 1500
                    });
                    // Refresh language list after successful deletion
                    getLanguageData();
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error(xhr.responseText);
                    // Show SweetAlert for error
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: xhr.responseText
                    });
                }
            });
        }
        $(document).ready(function() {
            $('#submitBtn').click(function (e) {
                e.preventDefault();

                var formData = $('#cvForm').serialize();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('cursus.store') }}',
                    data: formData,
                    success: function (response) {
                        // Handle success response
                        $('#cvForm')[0].reset();
                        // Refresh cursus list after successful submission
                        getCursusData();
                    },
                    error: function (xhr, status, error) {
                        // Handle error response
                        console.error(xhr.responseText);
                    }
                });
            });

            // Function to fetch cursus data via AJAX
            function getCursusData() {
                $.ajax({
                    type: 'GET',
                    url: '{{ route('getUserCurses') }}',
                    success: function (response) {

                        renderCursusList(response);
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }

            getCursusData();

            function renderCursusList(cursusData) {
                var cursusListHTML =
                    '<div class="border-t border-gray-300 dark:border-gray-600">';
                cursusData.forEach(function (cursus) {
                    cursusListHTML +=
                        '<div class="py-2 relative border-b border-gray-300 dark:border-gray-600">';
                    cursusListHTML += '<p class="mt-1 text-semibold text-gray-600 dark:text-gray-400"><span class="mt-1 text-semibold text-gray-600 dark:text-gray-200">Diplome :</span> ' + cursus.diplome +
                        '</p>';
                    cursusListHTML += '<p class="mt-1 text-semibold text-gray-600 dark:text-gray-400"><span class="mt-1 text-semibold text-gray-600 dark:text-gray-200">Institution :</span> ' + cursus
                        .etablissement + '</p>';
                    cursusListHTML += '<p class="mt-1 text-semibold text-gray-600 dark:text-gray-400"><span class="mt-1 text-semibold text-gray-600 dark:text-gray-200">Start Year :</span> ' + cursus
                        .date_obtention + '</p>';
                    cursusListHTML +=
                        '<button class="deleteCursusBtn bg-red-500 w-fit absolute bottom-0 right-0 m-4 text-white px-2 py-1 rounded  " data-id="' +
                        cursus.id + '">Delete</button>'; // Add delete button
                    cursusListHTML += '</div>';
                });
                cursusListHTML += '</div>';
                $('#cursusList').html(cursusListHTML);

                // Attach event listener to delete buttons
                $('.deleteCursusBtn').click(function () {
                    var cursusId = $(this).data('id');
                    console.log(cursusId);
                    deleteCursus(cursusId);
                });
            }

            // Function to delete cursus via AJAX
            function deleteCursus(cursusId) {
                $.ajax({
                    type: 'DELETE',
                    url: "{{ route('cursus.destroy', ['id' => ':cursusId']) }}".replace(':cursusId',
                        cursusId),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        console.log(response);
                        Swal.fire({
                            icon: 'success',
                            title: 'Deleted!',
                            text: response.message,
                            showConfirmButton: false,
                            timer: 1500
                        });
                        getCursusData();
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });

        $(document).ready(function() {
            $('#submitCompetenceBtn').click(function(e) {
                e.preventDefault();

                var formData = $('#competenceForm').serialize();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('competence.store') }}',
                    data: formData,
                    success: function(response) {
                        // Handle success response

                        $('#competenceForm')[0].reset();
                        // Refresh competence list after successful submission
                        getCompetenceData();
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        console.error(xhr.responseText);
                    }
                });
            });

            // Function to fetch competence data via AJAX
            function getCompetenceData() {
                $.ajax({
                    type: 'GET',
                    url: '{{ route('getUserCompetence') }}',
                    success: function(response) {
                        renderCompetenceList(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
            // Initial load of competence data
            getCompetenceData();
            function renderCompetenceList(competenceData) {
                var competenceListHTML =
                    '<div class="border-t border-gray-300 dark:border-gray-600">';
                if (Array.isArray(competenceData)) {
                competenceData.forEach(function(competence) {
                    competenceListHTML +=
                        '<div class="py-2 relative border-b border-gray-300 dark:border-gray-600">';
                    competenceListHTML += '<p class="mt-1 text-semibold text-gray-600 dark:text-gray-400"><span class="mt-1 text-semibold text-gray-600 dark:text-gray-200">Competence Name:</span> ' +
                        competence.nom + '</p>';
                    competenceListHTML += '<p class="mt-1 text-semibold text-gray-600 dark:text-gray-400"><span class="mt-1 text-semibold text-gray-600 dark:text-gray-200">Niveau:     </span> ' + competence
                        .niveau + '</p>';
                    competenceListHTML +=
                        '<button class="deleteCompetenceBtn absolute bottom-0 right-0 w-fit bg-red-500 text-white m-1 px-2 py-1 rounded" data-id="' +
                        competence.id + '">Delete</button>'; // Add delete button
                    competenceListHTML += '</div>';
                });
                } else {
                    // If competenceData is not an array, log an error
                    console.error('competenceData is not an array:', competenceData);
                }
                competenceListHTML += '</div>';
                $('#competenceList').html(competenceListHTML);
                $('.deleteCompetenceBtn').click(function() {
                    var competenceId = $(this).data('id'); // Get the competence ID from the data attribute
                    deleteCompetence(competenceId); // Call function to delete competence
                });
            }



            // Function to delete competence via AJAX
            function deleteCompetence(competenceId) {
                $.ajax({
                    type: 'DELETE',
                    url: '{{ route('competence.destroy', ':id') }}'.replace(':id', competenceId),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        // Handle success response
                        console.log(response);
                        // Refresh competence list after successful deletion
                        getCompetenceData();
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        console.error(xhr.responseText);
                    }
                });
            }
        });

        $('#submitExperienceBtn').click(function(e) {
            e.preventDefault();

            var formData = $('#experienceForm').serialize();

            $.ajax({
                type: 'POST',
                url: '{{ route('experience.store') }}',
                data: formData,
                success: function(response) {
                    // Handle success response
                    console.log(response);
                    // Refresh experience list after successful submission
                    getExperienceData();
                    // Clear the form fields after submission
                    $('#experienceForm')[0].reset();
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error(xhr.responseText);
                }
            });
        });

        // Function to fetch experience data via AJAX
        function getExperienceData() {
            $.ajax({
                type: 'GET',
                url: '{{ route('getUserExperience') }}',
                success: function(response) {
                    // Handle success response
                    console.log(response);
                    // Render experience data in the HTML
                    renderExperienceList(response);
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error(xhr.responseText);
                }
            });
        }
        // Initial load of experience data
        getExperienceData();
        // Function to render experience list in HTML
        function renderExperienceList(experienceData) {
            var experienceListHTML =
                '<div class="border-t border-gray-300 dark:border-gray-600">';
            experienceData.forEach(function(experience) {
                experienceListHTML +=
                    '<div class="py-2 relative border-b border-gray-300 dark:border-gray-600">';
                experienceListHTML += '<p class="mt-1 text-semibold text-gray-600 dark:text-gray-400"><span class="mt-1 text-semibold text-gray-600 dark:text-gray-200">Poste:</span> ' + experience
                    .poste + '</p>';
                experienceListHTML += '<p class="mt-1 text-semibold text-gray-600 dark:text-gray-400"><span class="mt-1 text-semibold text-gray-600 dark:text-gray-200">Company:</span> ' + experience
                    .entreprise + '</p>';
                experienceListHTML += '<p class="mt-1 text-semibold text-gray-600 dark:text-gray-400"><span class="mt-1 text-semibold text-gray-600 dark:text-gray-200">Start Date:</span> ' + experience
                    .date_debut + '</p>';
                experienceListHTML += '<p class="mt-1 text-semibold text-gray-600 dark:text-gray-400"><span class="mt-1 text-semibold text-gray-600 dark:text-gray-200">End Date:</span> ' + (experience
                    .date_fin ? experience.date_fin : 'Present') + '</p>';
                experienceListHTML +=
                    '<button class="deleteExperienceBtn bg-red-500 w-fit absolute bottom-0 right-0 m-4 text-white px-2 py-1 rounded" data-id="' +
                    experience.id + '">Delete</button>'; // Add delete button
                experienceListHTML += '</div>';
            });
            experienceListHTML += '</div>';
            $('#experienceList').html(experienceListHTML);

            $('.deleteExperienceBtn').click(function() {
                var experienceId = $(this).data('id'); // Get the experience ID from the data attribute
                deleteExperience(experienceId); // Call function to delete experience
            });
        }
        // Function to delete experience via AJAX
        function deleteExperience(experienceId) {
            $.ajax({
                type: 'DELETE',

                url: '{{ route('experience.destroy', ':id') }}'.replace(':id', experienceId),

                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    // Handle success response
                    console.log(response);
                    // Show SweetAlert for successful deletion
                    Swal.fire({
                        icon: 'success',
                        title: 'Experience deleted successfully!',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    // Refresh experience list after successful deletion
                    getExperienceData();
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error(xhr.responseText);
                    // Show SweetAlert for error
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Failed to delete experience. Please try again.',
                        showConfirmButton: false,
                        timer: 3000
                    });
                }
            });
        }



    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</x-app-layout>
