# A basic web project for a uni subject

##  hml folder

1. head.html: fitxategien burukoa eta hainbat link definituko dituen fitxategia.

## js folder

1. addTask.js:  dagokion erabiltzaileari eginkizun berri bat gehituko dio ajax bidez. Ajax eskaera addTask.php fitxategira egingo da.
1. importantquestionCounter.js: dagokion erabiltzailearen eginkizun garrantzitsu kopurua eguneratuko du 3 segunduro ajax bidez. Ajax deia importantquestionCounter.php fitxategira egingo da
1. loginRegister.js: erregistratu/kautotu lehioaren funtzionamendurako kodea.
1. logout.js: erabiltzailea logout botoia sakatzerakoan sesioa amaitu eta erregistratu/kautotu orrialdera eramango duen escripta, ajax erabiliz. Deia sessionDestroyer.php fitxategira egingo da.
1. questionCounter.js: dagokion erabiltzailearen galdera kopurua eguneratuko du 3 segunduro ajax bidez. Ajax deia counQuestions.php fitxategira egingo da.
1. taskFunctionalities.js: eginkuzun bakoitzaren funtzionamenduaz(bukatutzat eman, garrantzitsu jarri, ezabatu(ez du ongi egiten)) arduratzen da. Funtzionamendu bakoitza ajax dei bat dauka php fitxategi 1-era.

## php folder
1. addTask.php: dagokion erabiltzaileari eginkizun berria txertatuko dio xml-an.
1. completeTask.php: dagokion erabiltzailearen eginkizuna egina bezala markatuko du xml-an.
1. countQuestion.php: dagokion erabiltzailearen eginkizun kopurua kontatzen du.
1. deleteTask.php: dagokion erabiltzailearen eginkizuna ezabatzen du xml-tik(ez du ongi funtzionatzen).
1. importantquestionCounter.php: dagokion erabiltzailearen eginkizun garrantzitsuak kontatzen ditu.
1. importantTask.php: dagokion erabiltzailearen galdera garrantzitsuak azaltzen ditu, printImportantTaskFromXml.php fitxategiari esker.
1. loginRegister.php: hasierako orrialdea da eta bertan erabiltzaileak kautotu edo erregistratu ditzakete.
1. logUser.php: erabiltzailea kautotzerakoan datuak baliozkotu ditu.
1. printImportantTaskFromXml.php: dagokion erabiltzailearen eginkizun garrantzitsuak erakutsiko du taula batean (honen includea egiten da importantTask.php fitxategian).
1. printTaskFromXml.php: dagokion erabiltzailearen eginkizunak eta funtzionamenduak erakutsiko ditu taula batean (honen includea egiten da Task.php fitxategian).
1. registerUser.php: erabiltzaile berriak xml-a gordetzen duen fitxategia.
1. sessionDestroyer.php: dagoen sesioa ezabatzen du eta sesioko aldagaiak ezabatzen ditu.
1. sessionStarter.php: sesioa hasten duen fitxategia.
1. Task.php: horri nagusietako bat, bertan dagokion erabiltzailearen eginkizuak agertuko dira printTaskFromXm.php fitxategiari esker.
1. updateImportantInTask.php: dagokion erabiltzailearen eginkuza egina bezala markatuko du. 
1. userValidation.php: segurtasuna bermatzeko kodea, bakarrik kautotutako erabiltzaileak erabil dezakete aplikazioa.

## styles folder

1.loginRegister.css: loginRegister orriko estiloa 
1.sidebar.css: gure navbarraren estilo orria eta orrialdearen kapena definitzen dira.
1.tableStyle.css: dinamikoki azaltzen diren taulen estiloda definitzen du.

## xml folder

user.dtd: xml fitxategiaren integritatea bermatzen duen fitxategia.
user.xml: datuak gordetzeko fitxategia.