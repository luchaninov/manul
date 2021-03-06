<?php

define('MANUL_LANG_ID_RU', 'ru');
define('MANUL_LANG_ID_EN', 'en');
define('MANUL_LANG_ID_UA', 'uk');
define('MANUL_LANG_ID_TR', 'tr');

define('MANUL_LANG_ID_DEFAULT', MANUL_LANG_ID_EN);

$locals = array(MANUL_LANG_ID_RU, MANUL_LANG_ID_EN, MANUL_LANG_ID_UA, MANUL_LANG_ID_TR);

if (!isset($_COOKIE['lang'])) {
    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        $current_lang = @substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    } else {
        $current_lang = MANUL_LANG_ID_DEFAULT;
    }
} else {
    $current_lang = @substr($_COOKIE['lang'], 0, 2);
    if (!in_array($current_lang, $locals)) {
        $current_lang = MANUL_LANG_ID_DEFAULT;
    }
}

switch ($current_lang) {
    case MANUL_LANG_ID_EN:
        $lang_domain = 'http://help.yandex.com';
        break;
    case MANUL_LANG_ID_UA:
        $lang_domain = 'http://help.yandex.ua';
        break;
    case MANUL_LANG_ID_TR:
        $lang_domain = 'http://yardim.yandex.com.tr';
        break;
    default:
        $lang_domain = 'http://help.yandex.ru';
}

define('PS_HELP_URL', $lang_domain);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// This part of file is automatically generated
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Lang: ru
if ($current_lang == "ru") {
define('PS_SCANNING_FILE', 'Сканируем');
define('PS_SCANNING_OF', 'из');
define('PS_SEND_REPORT_BUTTON', 'Отправить отчет');
define('PS_ERR_NO_TEMP_FOLDER', 'Невозможно создать временные файлы: временный системный каталог и текущий каталог Manul не доступны для записи.');
define('PS_ERR_UPLOADING_XML', 'Ошибка загрузки XML файла. Пожалуйста, проверьте настройки PHP (upload_max_filesize)');
define('PS_ERR_BROKEN_XML', 'XML-отчёт поврежден');
define('PS_ERR_ARCHIVE_OPENING', 'Ошибка открытия архива');
define('PS_ERR_ARCHIVE_CREATION', 'Ошибка создания архива: %s');
define('PS_ERR_WRONG_ARCHIVE_MODE', 'Недопустимый режим архива. Возможные режимы: read, write, access.');
define('PS_ERR_ARCHIVE_WRITE_INCORRECT_MODE', 'Ошибка записи. Архив был открыт для чтения');
define('PS_ERR_NO_SUCH_FILE', 'Файл не существует.');
define('PS_ERR_TEMPLATE_DOESNT_EXISTS', 'Шаблон %s не найден.');
define('PS_ERR_XML_VALIDATION_FAILED', 'В функции DOMDocument::schemaValidate() возникла ошибка!');
define('PS_ERR_XML_VALIDATION_WARNING', 'Предупреждение %s');
define('PS_ERR_XML_VALIDATION_ERROR', 'Ошибка %s');
define('PS_ERR_XML_VALIDATION_FATAL_ERROR', 'Критическая ошибка %s');
define('PS_ERR_XML_FILE_SPEC', 'в %s');
define('PS_ERR_XML_LINE_SPEC', 'в строке %d');
define('PS_ERR_UNPACK_ARCHIVE', 'Ошибка открытия архива');
define('PS_ERR_BROKEN_XML_FILE', 'XML-файл повреждён');
define('PS_ERR_EXCEPTION_OCCURED', 'Возник exception:');
define('PS_ERR_QUARANTINE_NOT_EXISTS', 'Ошибка размещения в карантин: файл [%s] не существует');
define('PS_ERR_DELETE_NOT_EXISTS', 'Ошибка удаления файла: файл [%s] не существует');
define('PS_ERR_MALWARE_DB_BROKEN', 'Файл malware_db.xml поврежден');
define('PS_WAS_DELETED', 'Файл [%s] удален');
define('PS_WAS_QUARANTINED', 'Файл [%s] помещен в карантин');
define('PS_ENTER_PASSWORD', 'Введите пароль');
define('PS_FORGOT_PASSWORD', 'Забыли пароль?');
define('PS_DELETE_ARCHIVE', 'Архив уже существует. Удаляем %s');
define('PS_PASS_OK', 'OK');
define('PS_CHOOSE_STRONG_PASS', 'Придумайте пароль для доступа к Manul.');
define('PS_CHOOSE_STRONG_PASS_DESC', 'Это необходимо, чтобы защитить инструмент от несанкционированного использования.');
define('PS_ERR_SHORT_PASSWORD', 'Пароль слишком короткий.');
define('PS_ERR_WEAK_PASSWORD', 'Пароль должен содержать три типа символов из четырёх: строчные буквы, прописные буквы, цифры, спецсимволы.');
define('PS_ERR_INVALID_PASSWORD', 'Неверный пароль.');
define('PS_ERR_NO_QUARANTINE_FILE', 'Файл карантина не найден. Пожалуйста, выполните скрипт еще раз.');
define('PS_ERR_NO_DOWNLOAD_LOG_FILE', 'Файл XML не найден. Пожалуйста, выполните сканирование еще раз.');
define('PS_RECIPE_FILENAME', 'Имя файла');
define('PS_RECIPE_ACTION', 'Действие');
define('PS_RECIPE_ACTION_DEL', 'Удалить');
define('PS_RECIPE_ACTION_QUARANTINE', 'В карантин');
define('PS_SIGN_IN', 'Вход');
define('PS_PASSWORD', 'Пароль');
define('PS_OK', 'OK');
define('PS_TITLE_SCANNER', 'Сканер');
define('PS_TITLE_EXECUTOR', 'Лечение');
define('PS_HELP', 'Помощь');
define('PS_MAIN_TITLE', 'Manul');
define('PS_INSERT_RECIPE', 'Скопируйте предписание в поле:');
define('PS_CHECK_RECIPE', 'Действия будут применены только к выбранным файлам:');
define('PS_EXECUTE', 'Исполнить');
define('PS_RESULT', 'Журнал операций');
define('PS_EXECUTED_RESULT', 'Результат выполнения предписания:');
define('PS_DOWNLOAD_QUARANTINE', 'Скачать архив с файлами в карантине');
define('PS_DOWNLOAD_LOG', 'Скачать архив с отчетом');
define('PS_PRETEXT', 'Давайте найдем вредоносный код!');
define('PS_PROGRESS', 'Ход исполнения:');
define('PS_TOTAL_PROGRESS', 'Всего найдено %d файлов');
define('PS_BODYTEXT', 'Чтобы начать проверку сайта, нажмите кнопку "Начать сканирование”. После окончания сканирования программа предложит скачать файл отчета, который можно проанализировать самостоятельно или отправить на анализ специалисту.');
define('PS_INTERVAL', 'Интервал запросов:');
define('PS_SEC', 'сек');
define('PS_SCAN_LABEL', 'Искать вредоносный код:');
define('PS_SETTINGS', 'Настройки');
define('PS_FURTHER_INSTRUCTIONS_TITLE', 'Проверка завершена!');
define('PS_FURTHER_INSTRUCTIONS_1', 'Нажмите на кнопку, чтобы сохранить отчёт о проверке на жёсткий диск.');
define('PS_FURTHER_INSTRUCTIONS_2', 'По соображениям безопасности мы не рекомендуем публиковать отчёты Manul в открытом доступе.');
define('PS_START_SCAN', 'Начать сканирование');
define('PS_ERR_DUMMY_FOLDER', 'Имя каталога, в который установлен Manul, должно быть уникальным и состоять как минимум из 5 символов. Например, "manul_%s". Пожалуйста, переименуйте текущий каталог "%s".');
define('PS_ERR_CANNOT_CREATE_FILE', 'Ошибка при создании файла %s. Текст ошибки: %s');
define('PS_OLD_PHP', 'Для работы Manul необходима версия PHP 5.2.0 или выше.');
define('PS_NO_ZIP_MODULE', 'Для работы необходим PHP модуль Zip.');
define('PS_NO_DOMDOCUMENT_MODULE', 'Для работы необходим PHP модуль DOM.');
define('PS_ERR_NO_FILES_IN_WEB_ROOT', 'Нет файлов для проверки в корневом каталоге веб-сайта.');
define('PT_STR_DONE', 'Готово!');
define('PT_STR_ERR_OCCURED', 'Ошибка!');
define('PT_STR_BUTTON_CANCEL', 'Отменить сканирование');
define('PT_STR_SEARCH_AGAIN_BUTTON', 'Сканировать снова');
define('PT_STR_NO_ERROR_FOUND', 'Ошибок не обнаружено');
define('PT_STR_NO_XML_SUPPORT', 'Ваш браузер не поддерживает проверку XML');
define('PT_STR_INVALID_XML', 'Ошибка в скрипте: невалидный XML');
define('PT_STR_DELETE_APPROVAL', 'Некоторые из ваших файлов будут удалены. Подтверждаете?');
define('PS_DELETE_TOOL_BUTTON_TITLE', 'Удалить Manul');
define('PS_CHECKER_TITLE', 'Проверка конфигурации сервера');
define('PS_CHECKER_PASSED', 'Да');
define('PS_CHECKER_FAILED', 'Нет');
define('PS_CHECKER_ROOT_READABLE', 'Корневой каталог доступен для чтения:');
define('PS_CHECKER_PHPVERSION', 'Версия PHP 5.2 или выше:');
define('PS_CHECKER_ZIP', 'Установлен PHP модуль ZIP:');
define('PS_CHECKER_DOM', 'Установлен PHP модуль XML DOM:');
define('PS_CHECKER_PERM', 'Каталог temp доступен на запись:');
define('PS_CHECKER_FIX', 'Как исправить');
define('PS_CHECKER_MESSAGE', 'Пожалуйста, исправьте указанные проблемы и перезапустите Manul.');
}

// Lang: en
if ($current_lang == "en") {
define('PS_SCANNING_FILE', 'Scanning');
define('PS_SCANNING_OF', 'out of');
define('PS_SEND_REPORT_BUTTON', 'Send report');
define('PS_ERR_NO_TEMP_FOLDER', 'Temporary files can not be created: the Temp and Manul folders are not available for writing.');
define('PS_ERR_UPLOADING_XML', 'An error occurred when downloading the XML file. Please check your PHP settings (upload_max_filesize)');
define('PS_ERR_BROKEN_XML', 'The XML report is corrupted');
define('PS_ERR_ARCHIVE_OPENING', 'Error opening archive');
define('PS_ERR_ARCHIVE_CREATION', 'Error creating archive: %s');
define('PS_ERR_WRONG_ARCHIVE_MODE', 'Invalid archive mode. Valid options: read, write, access.');
define('PS_ERR_ARCHIVE_WRITE_INCORRECT_MODE', 'Write error. The archive was open for reading only.');
define('PS_ERR_NO_SUCH_FILE', 'The file doesn\'t exist.');
define('PS_ERR_TEMPLATE_DOESNT_EXISTS', '%s template not found.');
define('PS_ERR_XML_VALIDATION_FAILED', 'An error occurred in the DOMDocument::schemaValidate() function!');
define('PS_ERR_XML_VALIDATION_WARNING', 'Warning %s');
define('PS_ERR_XML_VALIDATION_ERROR', 'Error %s');
define('PS_ERR_XML_VALIDATION_FATAL_ERROR', 'Critical error %s');
define('PS_ERR_XML_FILE_SPEC', 'in %s');
define('PS_ERR_XML_LINE_SPEC', 'in line %d');
define('PS_ERR_UNPACK_ARCHIVE', 'Error opening archive');
define('PS_ERR_BROKEN_XML_FILE', 'The XML file is corrupted');
define('PS_ERR_EXCEPTION_OCCURED', 'An exception occurred:');
define('PS_ERR_QUARANTINE_NOT_EXISTS', 'Error putting file in quarantine: the file [%s] doesn\'t exist');
define('PS_ERR_DELETE_NOT_EXISTS', 'Error deleting file: the file [%s] doesn\'t exist');
define('PS_ERR_MALWARE_DB_BROKEN', 'malware_db.xml is corrupted');
define('PS_WAS_DELETED', '[%s] deleted');
define('PS_WAS_QUARANTINED', '[%s] put in quarantine');
define('PS_ENTER_PASSWORD', 'Enter password');
define('PS_FORGOT_PASSWORD', 'Forgot your password?');
define('PS_DELETE_ARCHIVE', 'Archive already exists. Deleting %s');
define('PS_PASS_OK', 'OK');
define('PS_CHOOSE_STRONG_PASS', 'Please create a password for Manul.');
define('PS_CHOOSE_STRONG_PASS_DESC', 'This is necessary to protect the tool from unauthorized use.');
define('PS_ERR_SHORT_PASSWORD', 'The password is too short.');
define('PS_ERR_WEAK_PASSWORD', 'The password should contain at least three types of characters out of four: upper- and lower-case letters, numbers and special characters.');
define('PS_ERR_INVALID_PASSWORD', 'Wrong password.');
define('PS_ERR_NO_QUARANTINE_FILE', 'Quarantine file not found. Please execute the script again.');
define('PS_ERR_NO_DOWNLOAD_LOG_FILE', 'XML report file not found. Please re-scan the site.');
define('PS_RECIPE_FILENAME', 'File name');
define('PS_RECIPE_ACTION', 'Action');
define('PS_RECIPE_ACTION_DEL', 'Delete');
define('PS_RECIPE_ACTION_QUARANTINE', 'In quarantine');
define('PS_SIGN_IN', 'Log in');
define('PS_PASSWORD', 'Password');
define('PS_OK', 'OK');
define('PS_TITLE_SCANNER', 'Scanner');
define('PS_TITLE_EXECUTOR', 'Treatment');
define('PS_HELP', 'Help');
define('PS_MAIN_TITLE', 'Manul');
define('PS_INSERT_RECIPE', 'Copy prescription into the field below');
define('PS_CHECK_RECIPE', 'Action will only be applied to chosen files:');
define('PS_EXECUTE', 'Execute');
define('PS_RESULT', 'Operations log:');
define('PS_EXECUTED_RESULT', 'Script execution result:');
define('PS_DOWNLOAD_QUARANTINE', 'Download archive with quarantined files');
define('PS_DOWNLOAD_LOG', 'Download archive with report');
define('PS_PRETEXT', 'Let\'s find malware!');
define('PS_PROGRESS', 'In progress:');
define('PS_TOTAL_PROGRESS', 'Found %d files total');
define('PS_BODYTEXT', 'Click "Scan" to check your site. After the scan is finished, the program will create an XML report that you can then analyze yourself or send to a specialist.');
define('PS_INTERVAL', 'Interval between requests');
define('PS_SEC', 'sec');
define('PS_SCAN_LABEL', 'Check for malware:');
define('PS_SETTINGS', 'Settings');
define('PS_FURTHER_INSTRUCTIONS_TITLE', 'Scan finished!');
define('PS_FURTHER_INSTRUCTIONS_1', 'Press the button below to download the scan report.');
define('PS_FURTHER_INSTRUCTIONS_2', 'We don’t recommend publishing the scan report file in open access for security reasons.');
define('PS_START_SCAN', 'Scan');
define('PS_ERR_DUMMY_FOLDER', 'The name of the directory where Manul is installed should be unique and consist of a minimum of 5 characters. For example, "manul_%s". Please rename the current directory "%s".');
define('PS_ERR_CANNOT_CREATE_FILE', 'An error occurred when creating the file %s. Error text: %s');
define('PS_OLD_PHP', 'Manul requires PHP version 5.2.0 or higher to work.');
define('PS_NO_ZIP_MODULE', 'Manul requires the PHP Zip extension to work.');
define('PS_NO_DOMDOCUMENT_MODULE', 'Manul requires the PHP DOM extension to work.');
define('PS_ERR_NO_FILES_IN_WEB_ROOT', 'There are no files to scan in the website\'s root folder.');
define('PT_STR_DONE', 'Done!');
define('PT_STR_ERR_OCCURED', 'Error!');
define('PT_STR_BUTTON_CANCEL', 'Cancel scan');
define('PT_STR_SEARCH_AGAIN_BUTTON', 'Re-scan');
define('PT_STR_NO_ERROR_FOUND', 'No errors were found');
define('PT_STR_NO_XML_SUPPORT', 'Your browser doesn\'t support XML validation');
define('PT_STR_INVALID_XML', 'Script error: invalid XML');
define('PT_STR_DELETE_APPROVAL', 'Some of your files will be deleted. Continue?');
define('PS_DELETE_TOOL_BUTTON_TITLE', 'Delete Manul');
define('PS_CHECKER_TITLE', 'Server configuration check');
define('PS_CHECKER_PASSED', 'Yes');
define('PS_CHECKER_FAILED', 'No');
define('PS_CHECKER_ROOT_READABLE', 'Document Root folder available for reading:');
define('PS_CHECKER_PHPVERSION', 'PHP version 5.2 or newer:');
define('PS_CHECKER_ZIP', 'PHP ZIP module installed:');
define('PS_CHECKER_DOM', 'PHP XML DOM module installed:');
define('PS_CHECKER_PERM', 'Temp folder available for writing:');
define('PS_CHECKER_FIX', 'How to fix it');
define('PS_CHECKER_MESSAGE', 'Please fix the issues mentioned above and restart Manul.');
}

// Lang: tr
if ($current_lang == "tr") {
define('PS_SCANNING_FILE', 'Taranıyor');
define('PS_SCANNING_OF', 'Toplam dosyadan taranan dosya sayısı: ');
define('PS_CHECKER_ROOT_READABLE', 'Ana klasör salt okunur:');
define('PS_SEND_REPORT_BUTTON', 'Raporu gönder');
define('PS_ERR_NO_TEMP_FOLDER', 'Geçici dosyalar oluşturulamaz: geçici sistem kataloğu ve mevcut Manul klasörü kayıt için geçersizdir.');
define('PS_ERR_UPLOADING_XML', 'XML dosyası yüklenirken hata yaşandı. Lütfen PHP (upload_max_filesize) ayarlarınızı kontrol ediniz');
define('PS_ERR_BROKEN_XML', 'XML raporu bozuk');
define('PS_ERR_ARCHIVE_OPENING', 'Arşiv açma hatası yaşandı');
define('PS_ERR_ARCHIVE_CREATION', 'Yaşanan arşiv kurma hatası No.: %s');
define('PS_ERR_WRONG_ARCHIVE_MODE', 'Arşiv modu geçersizdir. Geçerli modlar: read, write, access');
define('PS_ERR_ARCHIVE_WRITE_INCORRECT_MODE', 'Kayıt hatası yaşandı: Arşiv salt okunur modunda açılmıştı.');
define('PS_ERR_NO_SUCH_FILE', 'Böyle bir dosya mevcut değildir');
define('PS_ERR_TEMPLATE_DOESNT_EXISTS', '%s şablonu bulunamadı.');
define('PS_ERR_XML_VALIDATION_FAILED', 'DOMDocument::schemaValidate() işlevinde bir hata yaşandı!');
define('PS_ERR_XML_VALIDATION_WARNING', 'Uyarı: %s');
define('PS_ERR_XML_VALIDATION_ERROR', '%s hatası ');
define('PS_ERR_XML_VALIDATION_FATAL_ERROR', '%s kritik hatası');
define('PS_ERR_XML_FILE_SPEC', '%s\'de');
define('PS_ERR_XML_LINE_SPEC', '%d satırında');
define('PS_ERR_UNPACK_ARCHIVE', 'Arşiv açma hatası yaşandı');
define('PS_ERR_BROKEN_XML_FILE', 'XML dosyası bozuk');
define('PS_ERR_EXCEPTION_OCCURED', 'Bir exception oluştu:');
define('PS_ERR_QUARANTINE_NOT_EXISTS', 'Karantinaya gönderme hatası yaşandı: [%s] dosyası mevcut değildir.');
define('PS_ERR_DELETE_NOT_EXISTS', 'Dosya silme hatası yaşandı: [%s] dosyası mevcut değildir.');
define('PS_ERR_MALWARE_DB_BROKEN', 'Dosya malware_db.xml bozuk');
define('PS_WAS_DELETED', '[%s] dosyası silindi');
define('PS_WAS_QUARANTINED', '[%s] karantinaya gönderildi');
define('PS_ENTER_PASSWORD', 'Giriş şifrenizi girin');
define('PS_FORGOT_PASSWORD', 'Şifreyi mi unuttunuz?');
define('PS_DELETE_ARCHIVE', 'Arşiv zaten mevcut. %s siliniyor.');
define('PS_PASS_OK', 'Tamam');
define('PS_CHOOSE_STRONG_PASS', 'Manul\'a erişmek için şifre oluşturunuz.');
define('PS_CHOOSE_STRONG_PASS_DESC', 'Bu, aracın izinsiz kullanımını önlemek için gereklidir.');
define('PS_ERR_SHORT_PASSWORD', 'Şifre çok kısa.');
define('PS_ERR_WEAK_PASSWORD', 'Şifre dört karakter türünden en az üçünü içermelidir: büyük harfler, küçük harfler, rakamlar, özel semboller.');
define('PS_ERR_INVALID_PASSWORD', 'Şifre yanlış.');
define('PS_ERR_NO_QUARANTINE_FILE', 'Karantina dosyası bulunamıyor. Lütfen virüslerden arındırma işlemini tekrar yapınız.');
define('PS_ERR_NO_DOWNLOAD_LOG_FILE', 'XML dosyası bulunamıyor. Lütfen tarama işlemini yeniden yapınız.');
define('PS_RECIPE_FILENAME', 'Dosya adı');
define('PS_RECIPE_ACTION', 'Eylem adı');
define('PS_RECIPE_ACTION_DEL', 'Sil');
define('PS_RECIPE_ACTION_QUARANTINE', 'Karantinaya gönder');
define('PS_SIGN_IN', 'Giriş');
define('PS_PASSWORD', 'Giriş şifresi');
define('PS_OK', 'Tamam');
define('PS_TITLE_SCANNER', 'Tarayıcı');
define('PS_TITLE_EXECUTOR', 'Virüslerden arındırma');
define('PS_HELP', 'Yardım');
define('PS_MAIN_TITLE', 'Manul');
define('PS_INSERT_RECIPE', 'Talimat yazın:');
define('PS_CHECK_RECIPE', 'Eylemler ancak seçilen dosyalar için uygulanacaktır:');
define('PS_EXECUTE', 'Yap');
define('PS_RESULT', 'Eylemler geçmişi');
define('PS_EXECUTED_RESULT', 'İstenilen eylemlerin sonucu:');
define('PS_DOWNLOAD_QUARANTINE', 'Karantinaya gönderilen dosyaları içeren arşivi yükle');
define('PS_DOWNLOAD_LOG', 'Raporu içeren arşivi yükle');
define('PS_PRETEXT', 'Kötü amaçlı yazılım kodu bulalım!');
define('PS_PROGRESS', 'İlerleme grafiği:');
define('PS_TOTAL_PROGRESS', 'Bulunan dosya sayısı: %d');
define('PS_BODYTEXT', 'Site kontrolü işlemini başlatmak için "Taramayı başlat” butonuna tıklayın. Tarama işlemi tamamlandıktan sonra kendiniz veya bir uzman tarafından incelenebilecek bir rapor içerecek bir dosya yüklemeniz önerilecektir.');
define('PS_INTERVAL', 'Sorgu aralığı:');
define('PS_SEC', 'sn.');
define('PS_SCAN_LABEL', 'Kötü amaçlı yazılım kodu bul:');
define('PS_SETTINGS', 'Ayarlar');
define('PS_FURTHER_INSTRUCTIONS_TITLE', 'Kontrol tamamlandı!');
define('PS_FURTHER_INSTRUCTIONS_1', 'Kontrol raporunu sabit diske kaydetmek için butona tıklayın.');
define('PS_FURTHER_INSTRUCTIONS_2', 'Emniyet nedenlerinden ötürü Manul raporlarını açık erişime açmanızı önermeyiz.');
define('PS_START_SCAN', 'Taramayı başlat');
define('PS_ERR_DUMMY_FOLDER', 'Manul\'un bulunacağı katalog, 5 simgeyle oluşan özel ve benzersiz bir isme sahip olmalıdır. Örneğin "manul_%s". Lütfen "%s" klasörünün mevcut ismini değiştirin.');
define('PS_ERR_CANNOT_CREATE_FILE', 'Dosya kurma hatası yaşandı. Hatanın ayrıntıları: %s');
define('PS_OLD_PHP', 'Manul\'un çalışması için PHP 5.2.0 ve üzerindeki sürüm kullanmanız gerekir.');
define('PS_NO_ZIP_MODULE', 'Manul ile çalışabilmek için Zip modüllü bir PHP kullanmanız gerekir.');
define('PS_NO_DOMDOCUMENT_MODULE', 'Manul ile çalışabilmek için DOM modüllü bir PHP kullanmanız gerekir.');
define('PS_ERR_NO_FILES_IN_WEB_ROOT', 'Sitenin kök kataloğunda kontrol edilecek dosya yok.');
define('PT_STR_DONE', 'İşlem tamamlandı!');
define('PT_STR_ERR_OCCURED', 'Bir hata yaşandı!');
define('PT_STR_BUTTON_CANCEL', 'Taramayı iptal et');
define('PT_STR_SEARCH_AGAIN_BUTTON', 'Baştan tarama yap');
define('PT_STR_NO_ERROR_FOUND', 'Bir hata bulunamadı');
define('PT_STR_NO_XML_SUPPORT', 'Web tarayıcınız XML kontrol işlemlerini desteklemiyor.');
define('PT_STR_INVALID_XML', 'Komut dosyasında hata oluştu: XML geçersiz');
define('PT_STR_DELETE_APPROVAL', 'Bazı dosyalarınız silinecektir. İşlemi onaylıyor musunuz?');
define('PS_DELETE_TOOL_BUTTON_TITLE', 'Manul\'u sil');
define('PS_CHECKER_TITLE', 'Sunucu ayarları kontrolü');
define('PS_CHECKER_PASSED', 'Evet');
define('PS_CHECKER_FAILED', 'Hayır');
define('PS_CHECKER_PHPVERSION', 'PHP sürümünüz 5.2 veya üstü:');
define('PS_CHECKER_ZIP', 'PHP Zip modülü kuruldu:');
define('PS_CHECKER_DOM', 'PHP XML DOM modülü kuruldu:');
define('PS_CHECKER_PERM', 'TEMP kataloğu yazılabilir durumdadır.');
define('PS_CHECKER_FIX', 'Düzeltme yöntemi');
define('PS_CHECKER_MESSAGE', 'Sıralanan sorunları giderdikten sonra Manul\'u tekrar çalıştırın.');
}

// Lang: uk
if ($current_lang == "uk") {
define('PS_SCANNING_FILE', 'Скануємо');
define('PS_SCANNING_OF', 'із');
define('PS_CHECKER_ROOT_READABLE', 'Кореневий каталог доступний для читання:');
define('PS_SEND_REPORT_BUTTON', 'Надіслати звіт');
define('PS_ERR_NO_TEMP_FOLDER', 'Неможливо створити тимчасові файли: тимчасовий системний і поточний каталоги Manul недоступні для запису.');
define('PS_ERR_UPLOADING_XML', 'Помилка завантаження XML-файлу. Будь ласка, перевірте ваші налаштування PHP (upload_max_filesize)');
define('PS_ERR_BROKEN_XML', 'XML-звіт пошкоджено');
define('PS_ERR_ARCHIVE_OPENING', 'Помилка відкриття архіву');
define('PS_ERR_ARCHIVE_CREATION', 'Помилка створення архіву: %s');
define('PS_ERR_WRONG_ARCHIVE_MODE', 'Недопустимий режим архіву. Можливі режими: read, write, access.');
define('PS_ERR_ARCHIVE_WRITE_INCORRECT_MODE', 'Помилка запису. Архів було відкрито для читання');
define('PS_ERR_NO_SUCH_FILE', 'Немає такого файлу.');
define('PS_ERR_TEMPLATE_DOESNT_EXISTS', 'Шаблон %s не знайдено.');
define('PS_ERR_XML_VALIDATION_FAILED', 'У функції DOMDocument::schemaValidate() виникла помилка!');
define('PS_ERR_XML_VALIDATION_WARNING', 'Попередження %s');
define('PS_ERR_XML_VALIDATION_ERROR', 'Помилка %s');
define('PS_ERR_XML_VALIDATION_FATAL_ERROR', 'Критична помилка %s');
define('PS_ERR_XML_FILE_SPEC', 'в %s');
define('PS_ERR_XML_LINE_SPEC', 'у рядку %d');
define('PS_ERR_UNPACK_ARCHIVE', 'Помилка відкриття архіву');
define('PS_ERR_BROKEN_XML_FILE', 'XML-файл пошкоджено');
define('PS_ERR_EXCEPTION_OCCURED', 'Виник exception:');
define('PS_ERR_QUARANTINE_NOT_EXISTS', 'Помилка розміщення в карантин: файл [%s] не існує');
define('PS_ERR_DELETE_NOT_EXISTS', 'Помилка видалення файлу: файл [%s] не існує');
define('PS_ERR_MALWARE_DB_BROKEN', 'Файл malware_db.xml пошкоджено');
define('PS_WAS_DELETED', 'Файл [%s] видалено');
define('PS_WAS_QUARANTINED', 'Файл [%s] поміщено в карантин');
define('PS_ENTER_PASSWORD', 'Введіть пароль');
define('PS_FORGOT_PASSWORD', 'Забули пароль?');
define('PS_DELETE_ARCHIVE', 'Архів уже існує. Видаляємо %s');
define('PS_PASS_OK', 'OK');
define('PS_CHOOSE_STRONG_PASS', 'Придумайте пароль для доступу до Manul.');
define('PS_CHOOSE_STRONG_PASS_DESC', 'Це необхідно, щоб захистити інструмент від несанкціонованого використання.');
define('PS_ERR_SHORT_PASSWORD', 'Пароль занадто короткий.');
define('PS_ERR_WEAK_PASSWORD', 'Пароль повинен містити три типи символів із чотирьох: малі літери, великі літери, цифри і спецсимволи.');
define('PS_ERR_INVALID_PASSWORD', 'Неправильний пароль.');
define('PS_ERR_NO_QUARANTINE_FILE', 'Файл карантину не знайдено. Будь ласка, виконайте «Лікування» ще раз.');
define('PS_ERR_NO_DOWNLOAD_LOG_FILE', 'Файл XML не знайдено. Будь ласка, виконайте сканування ще раз.');
define('PS_RECIPE_FILENAME', 'Ім\'я файлу');
define('PS_RECIPE_ACTION', 'Дія');
define('PS_RECIPE_ACTION_DEL', 'Видалити');
define('PS_RECIPE_ACTION_QUARANTINE', 'У карантин');
define('PS_SIGN_IN', 'Вхід');
define('PS_PASSWORD', 'Пароль');
define('PS_OK', 'OK');
define('PS_TITLE_SCANNER', 'Сканер');
define('PS_TITLE_EXECUTOR', 'Лікування');
define('PS_HELP', 'Допомога');
define('PS_MAIN_TITLE', 'Manul');
define('PS_INSERT_RECIPE', 'Вставте припис:');
define('PS_CHECK_RECIPE', 'Дії буде застосовано лише до вибраних файлів:');
define('PS_EXECUTE', 'Виконати');
define('PS_RESULT', 'Журнал операцій');
define('PS_EXECUTED_RESULT', 'Результат виконання припису:');
define('PS_DOWNLOAD_QUARANTINE', 'Завантажити архів із файлами в карантині');
define('PS_DOWNLOAD_LOG', 'Завантажити архів зі звітом');
define('PS_PRETEXT', 'Давайте знайдемо шкідливий код!');
define('PS_PROGRESS', 'Хід виконання:');
define('PS_TOTAL_PROGRESS', 'Усього знайдено %d файлів');
define('PS_BODYTEXT', 'Щоб почати перевірку сайту, натисніть кнопку «Почати перевірку». Після закінчення сканування програма запропонує завантажити файл звіту, який можна проаналізувати самостійно або надіслати на аналіз фахівцю.');
define('PS_INTERVAL', 'Інтервал запитів:');
define('PS_SEC', 'с');
define('PS_SCAN_LABEL', 'Шукати шкідливий код:');
define('PS_SETTINGS', 'Налаштування');
define('PS_FURTHER_INSTRUCTIONS_TITLE', 'Перевірку завершено!');
define('PS_FURTHER_INSTRUCTIONS_1', 'Натисніть кнопку, щоб зберегти звіт про перевірку на жорсткий диск.');
define('PS_FURTHER_INSTRUCTIONS_2', 'Із міркувань безпеки ми не рекомендуємо публікувати звіти Manul у відкритому доступі.');
define('PS_START_SCAN', 'Почати сканування');
define('PS_ERR_DUMMY_FOLDER', 'Ім\'я каталогу, в якому встановлено Manul, повинно бути унікальним і складатися мінімум із 5 символів. Наприклад, «manul_%s». Будь ласка, перейменуйте поточний каталог «%s».');
define('PS_ERR_CANNOT_CREATE_FILE', 'Помилка під час створення файлу %s. Текст помилки: %s');
define('PS_OLD_PHP', 'Для роботи Manul потрібна версія PHP 5.2.0 або вище.');
define('PS_NO_ZIP_MODULE', 'Для роботи Manul потрібен PHP-модуль Zip.');
define('PS_NO_DOMDOCUMENT_MODULE', 'Для роботи Manul потрібен PHP-модуль DOM.');
define('PS_ERR_NO_FILES_IN_WEB_ROOT', 'Немає файлів для перевірки в кореневому каталозі веб-сайту.');
define('PT_STR_DONE', 'Готово!');
define('PT_STR_ERR_OCCURED', 'Помилка!');
define('PT_STR_BUTTON_CANCEL', 'Скасувати сканування');
define('PT_STR_SEARCH_AGAIN_BUTTON', 'Сканувати знову');
define('PT_STR_NO_ERROR_FOUND', 'Помилок не виявлено');
define('PT_STR_NO_XML_SUPPORT', 'Ваш браузер не підтримує перевірку XML');
define('PT_STR_INVALID_XML', 'Помилка у скрипті: невалідний XML');
define('PT_STR_DELETE_APPROVAL', 'Деякі з ваших файлів буде видалено. Підтверджуєте?');
define('PS_DELETE_TOOL_BUTTON_TITLE', 'Видалити Manul');
define('PS_CHECKER_TITLE', 'Перевірка конфігурації сервера');
define('PS_CHECKER_PASSED', 'Так');
define('PS_CHECKER_FAILED', 'Ні');
define('PS_CHECKER_PHPVERSION', 'Версія PHP 5.2 або вище:');
define('PS_CHECKER_ZIP', 'Встановлено PHP модуль ZIP:');
define('PS_CHECKER_DOM', 'Встановлено PHP модуль XML DOM:');
define('PS_CHECKER_PERM', 'Каталог temp доступний для запису:');
define('PS_CHECKER_FIX', 'Як виправити');
define('PS_CHECKER_MESSAGE', 'Будь ласка, виправте зазначені проблеми та перезапустіть Manul.');
}

