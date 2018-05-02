# School
|     Method                      |       Path                                  |         Response                    |
|    :------:                     |       :--                                   |       :----------:                  |
|  [GET School](#get-school)      |    /medbiq/api/programinfo/v1/school/:id    |      [School](#school-1)            |  
|  [GET Schools](#get-schools)    |      /medbiq/api/programinfo/v1/schools     | [School Results List](#school-results-list) |  


## Data Model

### School Results List
|   Property  |        Type                          |        Description                  | Required |
|   :------   |        :--:                          |        :----------                  |  :--:    |
|   schools   | \[[School Result](#school-result)\]  |  An Array of School Result objects. |   yes    |
|     next    |      Base64 String                   | Base 64 encoded string containing the data the server needs to paginate. This value can be an empty string to indicate no more pages. Ex: `aWQ9MDAyMw==`  |   yes   |


### School Result
|   Property  |  Type     |        Description              | Required |
|   :------   |  :--:     |        :----------              |  :--:    |
|      url    |   URL     | The school's API URL. <br> ex: `https://<school provider>/medbiq/api/programinfo/v1/school/<school id>` |   yes    |
|     name    |  String   |     Full name of the school.    |   yes    |
 
 
### School List
|   Property  |        Type                 |        Description           | Required |
|   :------   |        :--:                 |        :----------           |  :--:    |
|   schools   | \[[School](#school-1)\]     |  An Array of School objects. |   yes    |
|     next    |      Base64 String          | Base 64 encoded string containing the data the server needs to paginate. This value can be an empty string to indicate no more pages. Ex: `aWQ9MDAyMw==`  |   yes   |  
  
### School
|    Property     |        Type         |                            Description                            | Required |
|    :------      |        :--:         |                            :----------                            |   :--:   |
|       id        |       String        |                       The school ID/code.                         |   yes    |
|       url       |         URL         | The school's API URL. <br> ex: `https://<school provider>/medbiq/api/programinfo/v1/school/<school id>` |   yes    |
|  alternateURLs  |        [URL]        |          List of known alternate URLs for the school.             |    no    |
|      name       |       String        |                     Full name of the school.                      |   yes    |
| alternateNames  |      [String]       |  List of known alternates, abbreviations, acronyms for the school.|    no    |
| historicalNames |      [String]       |         List of known historical names for the school.            |    no    |
|       type      |'Private'<br>'Public'|                 The type of school. ex Public                     |   yes    |
| operationalStatus |     Boolean       |                Is the school current operational.                 |   yes    |
|  relatedSchools | \[[School Result](#school-result)\] |  List of schools related to the school.           |    no    |
|  schoolWebsites |       [URL]         |                      URLs to school websites.                     |    no    |
|     address     | [Address](#address) |                 The main address of the school.                   |   yes    |
|   phoneNumbers  |       [String]      |                    Phone numbers for the school.                  |   yes    |
|     language    | [ISO 639-1 Code](https://www.loc.gov/standards/iso639-2/php/code_list.php)  |     Language used in the school. | no |
|     programs    | \[[Program Result List](https://github.com/medbiq/medbiq/blob/master/api/programinfo/v1/program/program.md#program-result-list)\]| A list programs offered at the school. | yes | 


### Address
Defined in MedBiquitous Professional Profile [Address Specifications and Description Document](https://www.medbiq.org/working_groups/professional_profile/AddressSpecification.pdf)  
  
|   Property      |        Type         |                           Description                             | Required |
|   :------       |        :--:         |                           :----------                             |  :--:    |
| addressCategory | 'Residential'<br>'Business'<br>'Undeliverable' |  Indicates the type of address.        |   yes    |
| restrictions    | 'Unrestricted'<br>'Restricted'<br>'Confidential' | Indicates restrictions when sharing information.| yes  |
|      id         |         ID          |                An ID associated with the address.                 |   no     |
|  organization   |      [String]       |The organization, institution or department as part of the address.|   no     |
|streetAddressLine|      [String]       |         Street address lines. ex ['100 Main St', 'Apt 2']         |   no     |
|     city        |        String       |   The name of the city, town or village included in the address.  |   no     |
| stateOrProvince |        String       | The name of the state, province, or territorial division within a country.|  no  |
|   postalCode    |        String       | The zipcode or other postal code used to facilitate the sorting of mail.| no  |
|     region      |        String       | A non-administrative divisio of a country, or commonly used name for a grouping of countries. ex. Central America | no |
|     district    |        String       | A non-administrative division of a city, state, province, or country. | no |
|     country     | [Country](#country) |          An object representing a country.                        |   yes    |

### Country
|   Property      |        Type         |                           Description                             | Required |
|   :------       |        :--:         |                           :----------                             |  :--:    |
|  countryName    |       String        | The name of the country included in the address. ex. Switzerland  |    no    |
|  countryCode    | [ISO 3166 alpha-2](https://www.iso.org/iso-3166-country-codes.html) | The ISO 3166 alpha code for a particular country. ex. CH      |    no    |

## Requests
### GET School
Get information about a specific school by school ID.  
  
__Method:__  `GET`  
__Path:__ `/medbiq/api/programinfo/v1/school/:id`

#### Path Parameters
|   Param    |                        Description                              |
|   :---     |                       :------------                             |
|    id      |  Unique identifier / School Code of the school being requested. |

#### Query Parameters
None

#### Response
`200` [School](#school-1)

### GET Schools
Get a list of schools.  
  
__Method:__  `GET`  
__Path:__ `/medbiq/api/programinfo/v1/schools`

#### Path Parameters
None

#### Query Parameters
| Param    |   Type   |  Description    |
| :---     |   :--:   | :------------   |
| since    | [ISO 8601 Date](https://en.wikipedia.org/wiki/ISO_8601) |  Return only new or updated schools since the provided date.  | 
| name     |  String  |  Return schools that match the name provided. This will be checked against the name and alternateNames fields. |
| country  | [ISO 3166 alpha-2](https://www.iso.org/iso-3166-country-codes.html) |  Return schools that match the two character country code defined in ISO 3166. |
| state    |  String  |  Return schools that are located in the state or province provided.  |
| language | [ISO 639-1 Code](https://www.loc.gov/standards/iso639-2/php/code_list.php) |  Return schools whose primary language matches the language code provided. |
| limit    |  Integer |  Integer represeting the total number of schools to return. |
| next     |  Base64 String  |   Base64 encoded value needed for the server to paginate. This value is provided in the [School Results List](#school-results-list) and [School List](#school-list).  |
| orderBy  |  School Property  |  The property by which the schools will be ordered, prepended with '+' or '-' to indicate ascending or descending order. ex. `?orderBy=+country`  |
| full     |  Boolean |  Indicates if the response should be a list of [Schools](#school-1) (true) or [School Result](#school-result) (false). |

#### Response
`200` [School Results List](#school-results-list)  
  
If requested with `full=true` query parameter,  
`200` [School List](#school-list)
