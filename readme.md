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

## Setup and Installation

- setup appium
  1. open appium
  2. click on edit configurations
  3. open android studio and copy the android sdk to the ANDROID_HOME input
  4. copy the java jdk path and place that link in JAVA_HOME (should look something like `C:\Program Files\Java\jdk-15.0.1`)
  5. click on save and restart (if appium doesn't restart close the app and reopen it)
  6. click start server

- setup the php files
  1. save the files in a local server like xamp or mamp
  2. start the local sever
  3. change the variables: `$host`, `$db`, `$user`, `$pwd` and `$db` to your own data
  4. edit the path in the function `exec` to the java app which should be located in the file directory `out/artifacts/vaadin/` (you need to include the file in the exec() line to make it work)
  5. open `index.php` in your browser

- add new phones
  1. open the directory vaadin in a editor where u can edit java files
  2. open the the java folder in `vaadin/src/main`
  3. open open the android or ios folder for which device your want to add
  4. copy a function and rename it so the file doesn't have duplicate names
  5. open an cmd line and run the command `adb devices` to see what the udid of the new device is
  6. add the function name in the file `openwebapp` (for example `android.setup5`)
  7. copy and paste the new udid where the old/ duplicate udid is so the app doesn't try to open a website on the same phone twice
  8. rebuild the app so the changes will take effect (in the editor intellij you can do this by going to build/build artifacts/rebuild project)

---

## Usage

### a function for a phone

```Java
public static void setUp5() throws Exception {
        DesiredCapabilities caps = new DesiredCapabilities();   // create a new instance of the class DesiredCapabilities
        // create capabilities for appium to find the right device and have the correct data to preform an browser search
        caps.setCapability("platformName", "Android");          // set the platform to Android *required
        caps.setCapability("automationName", "UiAutomator2");   // delcare what automation driver the phone is using
        caps.setCapability("browserName", "Chrome");            // delcare which browser you are using a specified phone *required
        caps.setCapability("udid","emulator-xxxx");             // delcare the udid to make appium know a difference between the phones *required
        driver = new RemoteWebDriver(new URL(APPIUM), caps);    // create a driver to open the site on each phone

        driver.get(WebPage);                                    // run the driver
    }
```

### the main function in the file openwebapp

```Java
    public static void main(String[] args) throws Exception {
        // initialize and run program
        android android = new android();    // a call to the class android
        ios ios = new ios();                // a call to the class ios

        android.setUp1();                   // a call to the function setup1 in the class android
        android.setUp2();
        android.setUp3();
        ios.setUp1();

    }
```

---

## Licence
[MIT](https://choosealicense.com/licenses/mit/)
