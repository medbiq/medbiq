# Program
> Addtional details about the [Request](#requests) methods can be found by following the link in the the Method column.  
  
|     Method                      |         Path                                   |         Response                    |
|    :------:                     |         :--                                    |       :----------:                  |
|  [GET Program](#get-program)    |  /medbiq/api/programinfo/v1/program/:type/:id  |      [Program](#program-1)          |  
|  [GET Programs](#get-programs)  |        /medbiq/api/programinfo/v1/programs     |    [Program List](#program-list)    |  


## Data Model

### Program Results List
|   Property  |                    Type                 |              Description                         | Required |
|   :------   |                    :--:                 |              :----------                         |  :--:    |
|   programs  |  \[[Program Result](#program-result)\]  |        An Array of Program Results.              |   yes    |


### Program Result
|      Property      |           Type             |                     Description                      |   Required   |
|      :------       |           :--:             |                     :----------                      |     :--:     |
|         id         |          String            |                   The program ID.                    |     yes      |
|        name        |          String            |                Full name of the program.             |     yes      |
|        url         |           URL              |    The path to the [Program](#program-1) details.  ex: `https://<api provider>/medbiq/api/programinfo/v1/program/<program id type>/<program id value>`    |     yes      |


### Program List
|   Property  |         Type                 |                        Description                         | Required |
|   :------   |         :--:                 |                        :----------                         |  :--:    |
|   programs  |  \[[Program](#program-1)\]   |                  An Array of Program types.                |   yes    |


### Program  
|      Property      |           Type             |                     Description                      |   Required   |
|      :------       |           :--:             |                     :----------                      |     :--:     |
|        ids         |           \[[ID](https://github.com/medbiq/medbiq/blob/master/api/programinfo/v1/institution/institution.md#id)\]             |       The list of known IDs for the program.        |     yes      |
|        url         |            URL             |   The program's API URL. ex: `https://<api provider>/medbiq/api/programinfo/v1/program/<program id type>/<program id value>`  |  yes |
|  alternateURLs     |           [URL]            |    List of known alternate URLs for the program.     |      no      |
|       name         |           String           |            The name/title of the program             |     yes      |
|       type         |           String           |            The type of program.                      |      no      |
|    language        | [ISO 639-1 Code](https://www.loc.gov/standards/iso639-2/php/code_list.php)  |     Language of instruction used in the program. | no |
| curriculumDuration | [ISO 8601 Duration](https://en.wikipedia.org/wiki/ISO_8601) |  The duration of the program curriculum. ex: `P4Y` (4 years)  |  no  |
|     yearBegan      | [ISO 8601 Date](https://en.wikipedia.org/wiki/ISO_8601) |  The year the program instruction began. ex: `2002`  |  no  |
|  relatedInstitutions | \[[Institution Result](https://github.com/medbiq/medbiq/blob/master/api/programinfo/v1/institution/institution.md#institution-result)\] |  The list of institutions that offer this program.  |  yes   |
|    degree     |    [Degree](#degree)      | The degree received.   |  no  |
| accreditation |  [Accreditation](#accreditation) | The accrediting information about this program.  | no  |
|  certificate  |  [Certificate](#certificate)  | The certificate received.  | no |
| disciplineOrSpecialty |  String  |  The academic discipline or medical specialty of the program. ex. Cardiology.  |   no   | 


### Degree
|   Property  |   Type    |   Descripton                                                                       | Required |
|    :---     |   :--:    |    :-----                                                                          |   :--:   |
|  value      |   String  |  The degree received. ex. BA, MD                                                   |    yes   |
|  discipline |   String  |  The academic discipline for the degree received. ex. Engineering, Chemistry, etc. |    no    |
|  label      |   String  |  A label describing the degree. The label may contain the full title of the degree.|    no    |


### Accreditation
|   Property   |   Type    |   Descripton                                                                       | Required |
|    :---      |   :--:    |    :-----                                                                          |   :--:   |
| organization |   String  |  The organization accrediting this program. ex. ACGME                              |    yes   |
| status       |   String  |  The status of the accreditation.                                                  |    no    |
| start        | [ISO 8601 Date](https://en.wikipedia.org/wiki/ISO_8601) | The start date of the accreditation. |    no    |
| end          | [ISO 8601 Date](https://en.wikipedia.org/wiki/ISO_8601) | The end date of the accreditation.   |    no    |


### Certificate
|   Property   |   Type    |   Descripton                                                                       | Required |
|    :---      |   :--:    |    :-----                                                                          |   :--:   |
| value        |   String  |  The certificate received.                                                         |    yes   |
| type         |   String  |  The type of certificate. ex. Professional, HighSchool, etc.                       |    no    |



## Requests
### GET Program
Get information about a specific program by program ID.  
  
__Method:__  `GET`  
__Path:__ `/medbiq/api/programinfo/v1/program/:type/:id`  
__Response:__   
`200` [Program](#program-1)  

#### Path Parameters
|   Param    |           Description                                                      |
|   :---:    |          :------------                                                     |
|   type     |   The type of the identifier. An [ID](https://github.com/medbiq/medbiq/blob/master/api/programinfo/v1/institution/institution.md#id) type.   Service providers may accept multiple types to accomodate consumers with different types of [ID](https://github.com/medbiq/medbiq/blob/master/api/programinfo/v1/institution/institution.md#id). ex. ACGME  |
|    id      |   Unique identifier of the program being requested. An [ID](https://github.com/medbiq/medbiq/blob/master/api/programinfo/v1/institution/institution.md#id) value.                      |

#### Query Parameters
None


### GET Programs
Get a list of programs.  
  
__Method:__  `GET`  
__Path:__ `/medbiq/api/programinfo/v1/programs`  
__Response:__   
`200` [Program Results List](#program-results-list)  
If requested with `full=true` query parameter,  
`200` [Program List](#program-list)  

#### Path Parameters
None

#### Query Parameters
| Param    |   Type   |  Description    |
| :---     |   :--:   | :------------   |
| since    | [ISO 8601 Date](https://en.wikipedia.org/wiki/ISO_8601) |  Return only new or updated programs since the provided date.  | 
| name     |  String  |  Return programs that match the name/title provided. This will be checked against the name field. |
| language | [ISO 639-1 Code](https://www.loc.gov/standards/iso639-2/php/code_list.php) |  Return programs whose language of instruction matches the language code provided. |
| limit    |  Integer |  Integer represeting the maximum number of programs to return. |
| offset    |  Integer |  Integer represeting the number of values to skip before beginning to return values.  |
| orderBy  |  Program Property  |  The property by which the programs will be ordered, prepended with '+' or '-' to indicate ascending or descending order. ex. `?orderBy=+name`  |
| full     |  Boolean |  Indicates if the response should be a list of [Programs](#program-1) (true) or [Program Results](#program-result) (false). NOTE: Full details are only for top-level Programs. All other levels, such as the Institutions associated with the Program, are results with abbreviated information, ie. [Program Results List](#program-results-list) or [Institution Results List](https://github.com/medbiq/medbiq/blob/master/api/programinfo/v1/institution/institution.md#institution-results-list).|
