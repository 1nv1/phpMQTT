# phpMQTT

## Brief

The goal of this fork is give PHP 7.x support and improved the handle errors.

## Original work

You can access to original work at http://github.com/bluerhinos/phpMQTT

## Connect Return code values

| Value     | Return Code Response                              | Description                                                                        |
|-----------|---------------------------------------------------|------------------------------------------------------------------------------------|
| 0x00      | Connection Accepted                               | Connection accepted                                                                |
| 0x01      | Connection Refused, unacceptable protocol version | The Server does not support the level of the MQTT protocol requested by the Client |
| 0x02      | Connection Refused, identifier rejected           | The Client identifier is correct UTF-8 but not allowed by the Server               |
| 0x03      | Connection Refused, Server unavailable            | The Network Connection has been made but the MQTT service is unavailable           |
| 0x04      | Connection Refused, bad user name or password     | The data in the user name or password is malformed                                 |
| 0x05      | Connection Refused, not authorized                | The Client is not authorized to connect                                            |
| 0x06-0xFF | Reserved for future use                           |                                                                                    |
