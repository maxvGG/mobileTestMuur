package android;

import main.main;
import org.openqa.selenium.remote.DesiredCapabilities;
import org.openqa.selenium.remote.RemoteWebDriver;

import java.net.URL;
public class android extends main{
    private static RemoteWebDriver driver;
    private static String appium = "http://localhost:10000/wd/hub";
//        private RemoteWebDriver driver;

    public static void setUp() throws Exception {
        DesiredCapabilities caps = new DesiredCapabilities();
        caps.setCapability("platformName", "Android");
        caps.setCapability("automationName", "UiAutomator2");
        caps.setCapability("browserName", "Chrome");
        caps.setCapability("udid", "emulator-5554");
        driver = new RemoteWebDriver(new URL(appium), caps);

        driver.get(WebPage);
    }
}