package ios;

import main.main;
import org.openqa.selenium.remote.DesiredCapabilities;
import org.openqa.selenium.remote.RemoteWebDriver;

import java.net.URL;

public class ios extends main {
    private static RemoteWebDriver driver;
    private static String appium = "http://localhost:10001/wd/hub";
//        private RemoteWebDriver driver;

    public static void setUp() throws Exception {
        DesiredCapabilities caps = new DesiredCapabilities();
        caps.setCapability("platformName", "iOS");
        caps.setCapability("automationName", "XCUITest");
        caps.setCapability("browserName", "Safari");
//        TODO make multiple test for each phone and customize te udid for each of them
        caps.setCapability("udid", "test");
        driver = new RemoteWebDriver(new URL(appium),caps);

        driver.get(WebPage);
    }

}