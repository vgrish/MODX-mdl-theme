<?php
/**
 * Config Check English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['configcheck_admin'] = 'Kontakt venligst en systemadministrator og advar dem om denne besked!';
$_lang['configcheck_allowtagsinpost_context_enabled'] = 'Kontekst indstillingen allow_tags_in_post er aktiveret udenfor \'mgr\'';
$_lang['configcheck_allowtagsinpost_context_enabled_msg'] = 'Kontekstindstillingen allow_tags_in_post er aktiveret i din installation uden for mgr konteksten. MODX anbefaler denne indstilling være deaktiveret, medmindre du eksplicit vil tillade brugere at sende MODX tags, numeriske enheder eller HTML-scripttags via POST-metoden til en formular på dit websted. Dette bør generelt være deaktiveret undtagen i mgr konteksten.';
$_lang['configcheck_allowtagsinpost_system_enabled'] = 'Systemindstillingen allow_tags_in_post er aktiveret';
$_lang['configcheck_allowtagsinpost_system_enabled_msg'] = 'Systemindstilling allow_tags_in_post er aktiveret i din installation. MODX anbefaler, at denne indstilling skal være deaktiveret, medmindre du eksplicit ønsker at tillade brugere at sende MODX tags, numeriske enheder eller HTML-scripttags via POST-metoden til en formular på dit websted. Det er bedre at aktivere det via kontekstindstillinger for specifikke kontekster.';
$_lang['configcheck_cache'] = 'Cachemappen er ikke skrivbar';
$_lang['configcheck_cache_msg'] = 'MODX kan ikke skrive til cachemappen. MODX vil stadig fungere som forventet men der vil ikke ske nogen caching. Gør /_cache/ mappen skrivbar for at løse dette.';
$_lang['configcheck_configinc'] = 'Configfilen er stadig skrivbar!';
$_lang['configcheck_configinc_msg'] = 'Dit websted er sårbart over for hackere, der kan gøre en masse skade på webstedet. Skift venligst din configfil så den kun er læsbar! Hvis du ikke er sideadministrator, bedes du kontakte en og advare om denne besked! Den er beliggende på [[+path]]';
$_lang['configcheck_default_msg'] = 'En uspecificeret advarsel blev fundet. Hvilket er mærkeligt...';
$_lang['configcheck_errorpage_unavailable'] = 'Dit websides fejlside er ikke tilgængelig.';
$_lang['configcheck_errorpage_unavailable_msg'] = 'Dette betyder at din fejlside ikke er tilgængelig for normale webbrugere eller at den ikke eksisterer. Det kan føre til en rekursiv loop adfærd og mange fejl i logfilerne på dit website. Sørg for at ingen webbrugergrupper er knyttet til siden.';
$_lang['configcheck_errorpage_unpublished'] = 'Dit websites fejlside er ikke offentliggjort eller eksisterer ikke.';
$_lang['configcheck_errorpage_unpublished_msg'] = 'Dette betyder, at din fejlside er utilgængelige for offentligheden. Offentliggør siden eller sørg for den er tildelt til en eksisterende ressource fra dit website i systemindstillingsmenuen.';
$_lang['configcheck_images'] = 'Images-mappen er ikke skrivbar';
$_lang['configcheck_images_msg'] = 'Mappen images er ikke skrivbar eller eksisterer ikke. Dette betyder, at mediehåndteringsfunktioner i editoren ikke vil virke!';
$_lang['configcheck_installer'] = 'Installationsmappen findes stadig';
$_lang['configcheck_installer_msg'] = 'Mappen /setup/ indeholder installationsprogrammet for MODX. Prøv at forestille dig hvad der kunne ske hvis en ondsindet person fandt denne mappe og kørte installationsprogrammet. De kan sikkert ikke komme langt fordi der skal indtastes bruger og kode til databasen, men det er stadig bedst at slette denne mappe fra din server. Den er placeret her: [[+path]]';
$_lang['configcheck_lang_difference'] = 'Ukorrekt antal linier i sprogfilen';
$_lang['configcheck_lang_difference_msg'] = 'Det valgte sprog har et andet antal linier end standardsproget. Det er ikke nødvendigvis et problem med det kan betyde at sprogfilen skal opdateres.';
$_lang['configcheck_notok'] = 'Der var en eller flere konfigurationstjek som ikke var OK: ';
$_lang['configcheck_ok'] = 'Check gik OK - ingen advarsler at rapportere.';
$_lang['configcheck_phpversion'] = 'PHP version is outdated';
$_lang['configcheck_phpversion_msg'] = 'Your PHP version [[+phpversion]] is no longer maintained by the PHP developers, which means no security updates are available. It is also likely that MODX or an extra package now or in the near future will no longer support this version. Please update your environment at least to PHP [[+phprequired]] as soon as possible to secure your site.';
$_lang['configcheck_register_globals'] = 'register_globals er sat til ON i din php.ini konfigurationsfil';
$_lang['configcheck_register_globals_msg'] = 'Denne konfiguration gør dit site meget mere modtageligt overfor Cross Site Scripting (XSS) angreb. Du bør tale med din webhoteludbyder om hvad du kan gøre for at deaktivere denne indstilling.';
$_lang['configcheck_title'] = 'Konfigurationskontrol';
$_lang['configcheck_unauthorizedpage_unavailable'] = 'Dit websteds "uautoriseret adgang" side er ikke offentliggjort eller eksisterer ikke.';
$_lang['configcheck_unauthorizedpage_unavailable_msg'] = 'Dette betyder at din "uatoriseret adgang" side ikke er tilgængelig for normale webbrugere eller at den ikke eksisterer. Det kan føre til en rekursiv loop adfærd og mange fejl i logfilerne på dit website. Sørg for at ingen webbrugergrupper er knyttet til siden.';
$_lang['configcheck_unauthorizedpage_unpublished'] = 'Din "uautoriseret adgang" side, defineret i websites konfigurationsindstillingerne er ikke offentliggjort.';
$_lang['configcheck_unauthorizedpage_unpublished_msg'] = 'Dette betyder, at din "uautoriseret adgang" side er utilgængelige for offentligheden. Offentliggør siden eller sørg for den er tildelt til en eksisterende ressource fra dit website i systemindstillingsmenuen.';
$_lang['configcheck_warning'] = 'Konfigurationsadvarsel:';
$_lang['configcheck_what'] = 'Hvad betyder dette?';