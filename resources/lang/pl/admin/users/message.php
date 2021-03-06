<?php

return array(

    'accepted'                  => 'Pomyślnie zaakceptowałeś ten składnik aktywów.',
    'declined'                  => 'Pomyślnie odrzuciłeś ten składnik aktywów.',
    'bulk_manager_warn'	        => 'Your users have been successfully updated, however your manager entry was not saved because the manager you selected was also in the user list to be edited, and users may not be their own manager. Please select your users again, excluding the manager.',
    'user_exists'               => 'Użytkownik już istnieje!',
    'user_not_found'            => 'User [:id] nie istnieje.',
    'user_login_required'       => 'Pole login jest wymagane',
    'user_password_required'    => 'Pole hasło jest wymagane.',
    'insufficient_permissions'  => 'Brak uprawnień.',
    'user_deleted_warning'      => 'Ten użytkownik został usunięty. Musisz przywrócić tego użytkownika aby je wyedytować lub przypisać je do nowych aktywów.',
    'ldap_not_configured'        => 'Integracja z LDAP nie została skonfigurowana dla tej instalacji.',


    'success' => array(
        'create'    => 'Użytkownik utworzony pomyślnie.',
        'update'    => 'Użytkownik zaktualizowany pomyślnie.',
        'update_bulk'    => 'Users were successfully updated!',
        'delete'    => 'Użytkownik został usunięty pomyślnie.',
        'ban'       => 'Użytkownik został zablokowany.',
        'unban'     => 'Użytkownik został odblokowany.',
        'suspend'   => 'Konto użytkownika zostało wyłączone.',
        'unsuspend' => 'Konto użytkownika zostało włączone.',
        'restored'  => 'Użytkownik został przywrócony pomyślnie.',
        'import'    => 'Import użytkowników zakończony sukcesem.',
    ),

    'error' => array(
        'create' => 'Podczas tworzenia użytkownika wystąpił problem. Spróbuj ponownie.',
        'update' => 'Podczas aktualizacji użytkownika wystąpił problem. Spróbuj ponownie.',
        'delete' => 'Wystąpił błąd podczas usuwania użytkownika. Spróbuj ponownie.',
        'delete_has_assets' => 'This user has items assigned and could not be deleted.',
        'unsuspend' => 'Wystąpił problem podczas odblokowania użytkownika. Spróbuj ponownie.',
        'import'    => 'Podczas importowania użytkowników wystąpił błąd. Spróbuj ponownie.',
        'asset_already_accepted' => 'Aktywo zostało już zaakceptowane.',
        'accept_or_decline' => 'Musisz zaakceptować lub odrzucić to aktywo.',
        'incorrect_user_accepted' => 'The asset you have attempted to accept was not checked out to you.',
        'ldap_could_not_connect' => 'Nie udało się połączyć z serwerem LDAP. Sprawdź proszę konfigurację serwera LDAP w pliku konfiguracji. <br>Błąd z serwera LDAP:',
        'ldap_could_not_bind' => 'Nie udało się połączyć z serwerem LDAP. Sprawdź proszę konfigurację serwera LDAP w pliku konfiguracji. <br>Błąd z serwera LDAP: ',
        'ldap_could_not_search' => 'Nie udało się przeszukać serwera LDAP. Sprawdź proszę konfigurację serwera LDAP w pliku konfiguracji. <br>Błąd z serwera LDAP:',
        'ldap_could_not_get_entries' => 'Nie udało się pobrać pozycji z serwera LDAP. Sprawdź proszę konfigurację serwera LDAP w pliku konfiguracji. <br>Błąd z serwera LDAP:',
        'password_ldap' => 'The password for this account is managed by LDAP/Active Directory. Please contact your IT department to change your password. ',
    ),

    'deletefile' => array(
        'error'   => 'Pliki nie zostały usunięte. Spróbuj ponownie.',
        'success' => 'Pliki zostały usunięte.',
    ),

    'upload' => array(
        'error'   => 'Plik(i) nie zostały wysłane. Spróbuj ponownie.',
        'success' => 'Plik(i) zostały wysłane poprawnie.',
        'nofiles' => 'Nie wybrałeś żadnych plików do wysłania',
        'invalidfiles' => 'Jeden lub więcej z wybranych przez ciebie plików jest za duży lub jego typ nie jest dopuszczony. Dopuszczalne typy plików: png, gif, jpg, doc, docx, pdf, and txt.',
    ),

);
