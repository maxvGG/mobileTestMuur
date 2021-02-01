# java mobile testmuur

**Version 1.0.0**

Code and examples to setup the mobile testwall.

---

## Contributors

- Beau Vroegh & Max van Gorp

---

## Prerequisites

- java jdk - https://www.oracle.com/nl/java/technologies/javase-downloads.html
- android sdk - (download in setup of android studio)
- appium - http://appium.io/
- android studio - https://developer.android.com/studio
- chromedriver - https://chromedriver.chromium.org/
- adb - https://developer.android.com/studio/releases/platform-tools

---

## Setup

- setup appium

  1. open appium
  2. click on edit configurations
  3. open android studio and copy the android sdk to the ANDROID_HOME input
  4. copy the java jdk path and place that link in JAVA_HOME (should look something like `C:\Program Files\Java\jdk-15.0.1`)
  5. click on save and restart (if appium doesn't restart close the app and reopen it)
  6. click start server

- setup the php files

  1. save the files in a local server like xampp or mamp
  2. start the local sever
  3. change the variables: `$host`, `$db`, `$user`, `$pwd` and `$db` to your own data
  4. open `index.php` in your browser

- change / add phones
  1. open the directory vaadin in a editor where u can edit java files
  2. open the the java folder in `vaadin/src/main`
  3. open open the android or ios folder for which device your want to add
  4. copy a function and rename it so the file doesn't have duplicate names
  5. open an cmd line and run the command `adb devices` to see what the udid of the new device is
  6. copy and paste the new udid where the old/ duplicate udid is so the app doesn't try to open a website on the same phone twice

---
