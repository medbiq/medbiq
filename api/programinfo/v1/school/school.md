# School
|     Method                      |       Path                                  |         Response                    |
|    :------:                     |       :--                                   |       :----------:                  |
|  [GET School](#get-school)      |    /medbiq/api/programinfo/v1/school/:id    |      [School](#school-1)            |  
|  [GET Schools](#get-schools)    |      /medbiq/api/programinfo/v1/schools     | [School Results List](#school-results-list) |  


## Data Model

### School Results List
|   Property  |        Type                         |        Description                  | Required |
|   :------   |        :--:                         |        :----------                  |  :--:    |
|   schools   | \[[School Result](#school-result)\]  |  An Array of School Result objects. |   yes    |


### School Result
|   Property  |  Type     |        Description              | Required |
|   :------   |  :--:     |        :----------              |  :--:    |
|      url    |   URL     |         The school URL.         |   yes    |
|     name    |  String   |     Full name of the school.    |   yes    |
 
 
### School List
|   Property  |        Type                 |        Description           | Required |
|   :------   |        :--:                 |        :----------           |  :--:    |
|   schools   | \[[School](#school-1)\]     |  An Array of School objects. |   yes    |
  
  
### School
|    Property     |        Type         |                            Description                            | Required |
|    :------      |        :--:         |                            :----------                            |   :--:   |
|       id        |       String        |                          The school ID.                           |   yes    |
|       url       |         URL         |                          The school URL.                          |   yes    |
|  alternateURLs  |        [URL]        |          List of known alternate URLs for the school.             |    no    |
|      name       |       String        |                     Full name of the school.                      |   yes    |
| alternateNames  |      [String]       |  List of known alternates, abbreviations, acronyms for the school.|    no    |
| historicalNames |      [String]       |         List of known historical names for the school.            |    no    |
|       type      |'Private'<br>'Public'|                 The type of school. ex Public                     |   yes    |
| operationalStatus |     Boolean       |                Is the school current operational.                 |   yes    |
|  schoolWebsites |       [URL]         |                      URLs to school websites.                     |    no    |
|     address     | [Address](#address) |                 The main address of the school.                   |   yes    |
|   phoneNumbers  |       [String]      |                    Phone numbers for the school.                  |   yes    |
|     programs    | \[[Program](https://github.com/medbiq/medbiq/blob/master/api/programinfo/v1/program/program.md#program-1)\]| Programs offered at the school. | yes | 


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
|  countryCode    |       String        | The [ISO 3166](https://www.iso.org/iso-3166-country-codes.html) alpha code for a particular country. ex. CH      |    no    |

## Requests
### GET School
Get information about a specific school by school ID.  
  
__Method:__  `GET`  
__Path:__ `/medbiq/api/programinfo/v1/school/:id`

#### Path Parameters
|   Param    |                  Description                      |
|   :---     |                 :------------                     |
|    id      |  Unique identifier of the school being requested. |

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
| Param      |  Description                                                              |
| :---       | :------------                                                             |
| since      |  Return only new or updated schools since the [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) formatted Date.  | 
| full   

#### Response
`200` [School Results List](#school-results-list)
If requested with full=true query parameter
`200` [School List](#school-list)
