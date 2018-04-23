# School
|     Method                      |       Path                                  |         Response                    |
|    :------:                     |       :--:                                  |       :----------:                  |
|  [GET School](#get-school)      |    /medbiq/api/programinfo/v1/school/:id    |      [School](#school-1)            |  
|  [GET Schools](#get-schools)    |      /medbiq/api/programinfo/v1/schools     |    [School List](#school-list)      |  


## Data Model

### School List
|   Property  |        Type                 |        Description         | Required |
|   :------   |        :--:                 |        :----------         |  :--:    |
|   schools   | \[[School](#school-1)\]     |  An Array of School types  |   yes    |
  
  
### School
|    Property     |        Type         |                            Description                            | Required |
|    :------      |        :--:         |                            :----------:                           |   :--:   |
|       id        |       String        |                          The school ID                            |   yes    |
|  alternateIDs   |      [String]       |          List of known alternate IDs for the school               |    no    |
|      name       |       String        |                     Full name of the school                       |   yes    |
| alternateNames  |      [String]       |  List of known alternates, abbreviations, acronyms for the school |    no    |
| historicalNames |      [String]       |  List of known alternates, abbreviations, acronyms for the school |    no    |
|       type      | 'Private'<br>'Public' |               The type of school. ex Public                     |   yes    |
| operationalStatus |     Boolean       |                Is the school current operational                  |   yes    |
|  schoolWebsites |       [URL]         |                      URLs to school websites                      |    no    |
|     address     |\[[Address](#address)\]|                 The main address of the school                  |   yes    |
|   phoneNumbers  |       [String]      |                    Phone numbers for the school                   |   yes    |
|     programs    | \[[Program](https://github.com/medbiq/medbiq/blob/master/api/programinfo/v1/program/program.md#program-1)\]| Programs offered at the school | yes | 


### Address
Defined in MedBiquitous Professional Profile [Address Specifications and Description Document](https://www.medbiq.org/working_groups/professional_profile/AddressSpecification.pdf)  
  
|   Property      |        Type         |                           Description                             | Required |
|   :------       |        :--:         |                           :----------                             |  :--:    |
| addressCategory | 'Residential'<br>'Business'<br>'Undeliverable' |  Indicates the type of address         |   yes    |
| restrictions    | 'Unrestricted'<br>'Restricted'<br>'Confidential' | Indicates restrictions when sharing information | yes  |
|      id         |         ID          |                An ID associated with the address                  |   no     |
|  organization   |      [String]       |The organization, institution or department as part of the address.|   no     |
|streetAddressLine|      [String]       |         Street address lines. ex ['100 Main St', 'Apt 2']         |   no     |
|     city        |        String       |   The name of the city, town or village included in the address.  |   no     |
| stateOrProvince |        String       | The name of the state, province, or territorial division within a country.|  no  |
|   postalCode    |        String       | The zipcode or other postal code used to facilitate the sorting of mail.| no  |
|     region      |        String       | A non-administrative divisio of a country, or commonly used name for a grouping of countries. ex. Central America | no |
|     district    |        String       | A non-administrative division of a city, state, province, or country. | no |
|     country     | [Country](#country) |          An object representing a country                         |   yes    |

### Country
|   Property      |        Type         |                           Description                             | Required |
|   :------       |        :--:         |                           :----------                             |  :--:    |
|  countryName    |       String        | The name of the country included in the address. ex. Switzerland  |    no    |
|  countryCode    |       String        | The [ISO 3166](https://www.iso.org/iso-3166-country-codes.html) alpha code for a particular country. ex. CH      |    no    |

## Requests
### GET School
Get information about a specific school by school ID.  
  
__Method:__  GET  
__Path:__ /medbiq/api/programinfo/v1/school/:id

#### Path Parameters
|   Param    |           Type           |       Description        |
|   :---     |        :--------:        |      :------------       |
|    id      |            ID            |  Unique identifier of the school being requested  |

#### Query Parameters
None


### GET Schools
Get a list of programs.  
  
__Method:__  GET  
__Path:__ /medbiq/api/programinfo/v1/schools

#### Path Parameters
None

#### Query Parameters
None
