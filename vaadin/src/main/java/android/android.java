package android;

import openwebapp.openwebapp;
import org.openqa.selenium.remote.DesiredCapabilities;
import org.openqa.selenium.remote.RemoteWebDriver;

import java.net.URL;

public class android extends openwebapp {
    private static RemoteWebDriver driver;
    protected static final String APPIUM = "http://localhost:4444/wd/hub";
    // private RemoteWebDriver driver;

    // 1 setup voor elke nieuwe telefoon
    public static void setUp1() throws Exception {
        DesiredCapabilities caps = new DesiredCapabilities();
        caps.setCapability("platformName", "Android");
        caps.setCapability("automationName", "UiAutomator2");
        caps.setCapability("browserName", "Chrome");
        caps.setCapability("udid", "emulator-5554");
        driver = new RemoteWebDriver(new URL(APPIUM), caps);

        driver.get(WebPage);
    }

    public static void setUp2() throws Exception {
        DesiredCapabilities caps = new DesiredCapabilities();
        caps.setCapability("platformName", "Android");
        caps.setCapability("automationName", "UiAutomator2");
        caps.setCapability("browserName", "Chrome");
        caps.setCapability("udid", "emulator-5556");
        driver = new RemoteWebDriver(new URL(APPIUM), caps);

        driver.get(WebPage);
    }

    public static void setUp3() throws Exception {
        DesiredCapabilities caps = new DesiredCapabilities();
        caps.setCapability("platformName", "Android");
        caps.setCapability("automationName", "UiAutomator2");
        caps.setCapability("browserName", "Chrome");
        caps.setCapability("udid", "192.168.130.237:5555");
        driver = new RemoteWebDriver(new URL(APPIUM), caps);

        driver.get(WebPage);
    }
}
