# Weather module
### Installation
Copy code to your `/app/code/Codeal/Weather` folder 

Enable module `bin/magento module:enable Codeal:Weather`

Insert your apiKey for OpenWeather in etc/di.xml (for test purposes there is apiKey at this moment)

Run cron for gathering weather data
`bin/magento cron:run --group codeal `

Or use direct controller (`/weather/index/fetch`). It's only for tests, remember to delete it before deploying to production.
It will be changed to console command in further versions.

Roadmap: 
v 1.1
- apiKey and other config data will be moved to core_config_data
- fetch controller will be removed or transformed into console command

![Screen1](https://raw.githubusercontent.com/kchechlinski/images/main/mage_weather_screen1.png)
![Screen2](https://raw.githubusercontent.com/kchechlinski/images/main/mage_weather_screen2.png)
