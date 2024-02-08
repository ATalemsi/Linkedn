<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Candidature
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $photo_profil
 * @property string|null $titre
 * @property string|null $poste_actuel
 * @property string|null $industrie
 * @property string|null $adresse
 * @property string|null $informations_contact
 * @property string|null $a_propos
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\OffreEmploi> $offresEmploi
 * @property-read int|null $offres_emploi_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Candidature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidature query()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidature whereAPropos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidature whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidature whereIndustrie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidature whereInformationsContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidature wherePhotoProfil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidature wherePosteActuel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidature whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidature whereTitre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidature whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidature whereUserId($value)
 */
	class Candidature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Competence
 *
 * @property int $id
 * @property int $cv_id
 * @property string $nom
 * @property string $niveau
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Cv $cv
 * @method static \Illuminate\Database\Eloquent\Builder|Competence newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Competence newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Competence query()
 * @method static \Illuminate\Database\Eloquent\Builder|Competence whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competence whereCvId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competence whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competence whereNiveau($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competence whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Competence whereUpdatedAt($value)
 */
	class Competence extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CursusEducatif
 *
 * @property int $id
 * @property int $cv_id
 * @property string $diplome
 * @property string $etablissement
 * @property string $date_obtention
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Cv $cv
 * @method static \Illuminate\Database\Eloquent\Builder|CursusEducatif newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CursusEducatif newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CursusEducatif query()
 * @method static \Illuminate\Database\Eloquent\Builder|CursusEducatif whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CursusEducatif whereCvId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CursusEducatif whereDateObtention($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CursusEducatif whereDiplome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CursusEducatif whereEtablissement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CursusEducatif whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CursusEducatif whereUpdatedAt($value)
 */
	class CursusEducatif extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Cv
 *
 * @property int $id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Competence> $competences
 * @property-read int|null $competences_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CursusEducatif> $cursusEducatifs
 * @property-read int|null $cursus_educatifs_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ExperienceProfessionnelle> $experiencesProfessionnelles
 * @property-read int|null $experiences_professionnelles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LangueMaitrisee> $languesMaitrisees
 * @property-read int|null $langues_maitrisees_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Cv newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cv newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cv query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cv whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cv whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cv whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cv whereUserId($value)
 */
	class Cv extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Entreprise
 *
 * @property int $id
 * @property int $user_id
 * @property string $nom
 * @property string|null $logo
 * @property string|null $slogan
 * @property string|null $industrie
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\OffreEmploi> $offresEmploi
 * @property-read int|null $offres_emploi_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise query()
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise whereIndustrie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise whereSlogan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entreprise whereUserId($value)
 */
	class Entreprise extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ExperienceProfessionnelle
 *
 * @property-read \App\Models\Cv $cv
 * @method static \Illuminate\Database\Eloquent\Builder|ExperienceProfessionnelle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExperienceProfessionnelle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExperienceProfessionnelle query()
 */
	class ExperienceProfessionnelle extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LangueMaitrisee
 *
 * @property-read \App\Models\Cv $cv
 * @method static \Illuminate\Database\Eloquent\Builder|LangueMaitrisee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LangueMaitrisee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LangueMaitrisee query()
 */
	class LangueMaitrisee extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OffreEmploi
 *
 * @property int $id
 * @property int $entreprise_id
 * @property string $titre
 * @property string $description
 * @property string $competences_requises
 * @property string $type_contrat
 * @property string $emplacement
 * @property int $nombre_visites
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Candidature> $candidatures
 * @property-read int|null $candidatures_count
 * @property-read \App\Models\Entreprise $entreprise
 * @method static \Illuminate\Database\Eloquent\Builder|OffreEmploi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OffreEmploi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OffreEmploi query()
 * @method static \Illuminate\Database\Eloquent\Builder|OffreEmploi whereCompetencesRequises($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffreEmploi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffreEmploi whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffreEmploi whereEmplacement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffreEmploi whereEntrepriseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffreEmploi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffreEmploi whereNombreVisites($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffreEmploi whereTitre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffreEmploi whereTypeContrat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OffreEmploi whereUpdatedAt($value)
 */
	class OffreEmploi extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $role
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Cv|null $cv
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent implements \Illuminate\Contracts\Auth\MustVerifyEmail {}
}

