# Institution
> Addtional details about the [Request](#requests) methods can be found by following the link in the the Method column.  
  
|     Method                      |       Path                                  |         Response                    |
|    :------:                     |       :--                                   |       :----------:                  |
|  [GET Institution](#get-institution)      |    /medbiq/api/programinfo/v1/institution/:type/:id    |      [Institution](#institution-1)            |  
|  [GET Institutions](#get-institutions)    |      /medbiq/api/programinfo/v1/institutions     | [Institution Results List](#institution-results-list) |  


## Data Model

### Institution Results List
|   Property  |        Type                          |        Description                  | Required |
|   :------   |        :--:                          |        :----------                  |  :--:    |
|   institutions   | \[[Institution Result](#institution-result)\]  |  An Array of Institution Result objects. |   yes    |


### Institution Result
|   Property  |  Type     |        Description                                 | Required |
|   :------   |  :--:     |        :----------                                 |  :--:    |
|      url    |   URL     | The institution's API URL. <br> ex: `https://<api provider>/medbiq/api/programinfo/v1/institution/<institution id type>/<institution id value>` |   yes    |
|     name    |  String   |     Full name of the institution.                  |   yes    |
|   relation  |   String  | Relationship of this institution to the subject.   |   no     | 
 
 
### Institution List
|   Property  |        Type                 |        Description           | Required |
|   :------   |        :--:                 |        :----------           |  :--:    |
|institutions | \[[Institution](#institution-1)\]     |  An Array of Institution objects. |   yes    |
 
  
### Institution
|    Property     |        Type         |                            Description                            | Required |
|    :------      |        :--:         |                            :----------                            |   :--:   |
|       ids       |   \[[ID](#id)\]     |                     The institution ID/codes.                     |   yes    |
|       url       |         URL         | The institution's API URL. <br> ex: `https://<institution provider>/medbiq/api/programinfo/v1/institution/<institution id type>/<institution id value>` |   yes    |
|  alternateURLs  |        [URL]        |          List of known alternate URLs for the institution.             |    no    |
|      name       |       String        |                     Full name of the institution.                      |   yes    |
| alternateNames  |      [String]       |  List of known alternates, abbreviations, acronyms for the institution.|    no    |
| historicalNames |      [String]       |         List of known historical names for the institution.            |    no    |
|       type      |'Private'<br>'Public'|                 The type of institution. ex Public                     |   yes    |
| operationalStatus |     Boolean       |                Is the institution current operational.                 |   yes    |
|  relatedInstitutions | \[[Institution Result](#institution-result)\] |  List of institutions related to the institution.           |    no    |
|  institutionWebsites |       [URL]         |                      URLs to institution websites.                     |    no    |
|     address     | [Address](#address) |                 The main address of the institution.                   |   yes    |
|   phoneNumbers  |       [String]      |                    Phone numbers for the institution.                  |   yes    |
|     language    | [ISO 639-1 Code](https://www.loc.gov/standards/iso639-2/php/code_list.php)  |     Language used in the institution. | no |
|     programs    | \[[Program Result List](https://github.com/medbiq/medbiq/blob/master/api/programinfo/v1/program/program.md#program-result-list)\]| A list programs offered at the institution. | yes | 


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

### ID
|   Property      |        Type         |                           Description                             | Required |
|   :------       |        :--:         |                           :----------                             |  :--:    |
|     type        |       String        |              The type of identifier. ex. ACGME                    |    yes   |
|     value       |       String        |        The value of the identifer / institution code.             |    yes   |
|    domain       |        URI          |            URI representing the domain of the ID.                 |    no    |  
  
  
## Requests
### GET Institution
Get information about a specific institution by institution ID.  
  
__Method:__  `GET`  
__Path:__ `/medbiq/api/programinfo/v1/institution/:type/:id`

#### Path Parameters
|   Param    |                        Description                              |
|   :---     |                       :------------                             |
|    type    |  The type of the identifier. The [ID](#id) type.  Service providers may accept multiple types to accomodate consumers with different types of [ID](#id). ex. ACGME  |
|    id      |  Unique identifier / Institution Code of the institution being requested. The [ID](#id) value |

#### Query Parameters
None

#### Response
`200` [Institution](#institution-1)

### GET Institutions
Get a list of institutions.  
  
__Method:__  `GET`  
__Path:__ `/medbiq/api/programinfo/v1/institutions`

#### Path Parameters
None

#### Query Parameters
| Param    |   Type   |  Description    |
| :---     |   :--:   | :------------   |
| since    | [ISO 8601 Date](https://en.wikipedia.org/wiki/ISO_8601) |  Return only new or updated institutions since the provided date.  | 
| name     |  String  |  Return institutions that match the name provided. This will be checked against the name and alternateNames fields. |
| country  | [ISO 3166 alpha-2](https://www.iso.org/iso-3166-country-codes.html) |  Return institutions that match the two character country code defined in ISO 3166. |
| state    |  String  |  Return institutions that are located in the state or province provided.  |
| language | [ISO 639-1 Code](https://www.loc.gov/standards/iso639-2/php/code_list.php) |  Return institutions whose primary language matches the language code provided. |
| limit    |  Integer |  Integer represeting the maximum number of institutions to return. |
| offset   |  Integer |  Integer represeting the number of values to skip before beginning to return values.  |
| orderBy  |  Institution Property  |  The property by which the institutions will be ordered, prepended with '+' or '-' to indicate ascending or descending order. ex. `?orderBy=+country`  |
| full     |  Boolean |  Indicates if the response should be a list of [Institutions](#institution-1) (true) or [Institution Result](#institution-result) (false). NOTE: Full details are only for top-level Programs. All other levels, such as the Institutions associated with the Program, are results with abbreviated information, ie. [Program Result Lists](https://github.com/medbiq/medbiq/blob/master/api/programinfo/v1/program/program.md#program-result-list) or [Institution Result List](#institution-result-list). |

#### Response
`200` [Institution Results List](#institution-results-list)  
  
If requested with `full=true` query parameter,  
`200` [Institution List](#institution-list)
