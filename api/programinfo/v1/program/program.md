# Program
|     Method                      |       Path                                  |         Response                    |
|    :------:                     |       :--                                   |       :----------:                  |
|  [GET Program](#get-program)    |    /medbiq/api/programinfo/v1/program/:id   |      [Program](#program-1)          |  
|  [GET Programs](#get-programs)  |      /medbiq/api/programinfo/v1/programs    |    [Program List](#program-list)    |  


## Data Model

### Program Results List
|   Property  |                    Type                 |              Description                         | Required |
|   :------   |                    :--:                 |              :----------                         |  :--:    |
|   programs  |  \[[Program Result](#program-result)\]  |        An Array of Program Results.              |   yes    |
|     next    |      Base64 String                      | Base 64 encoded string containing the data the server needs to paginate. This value can be an empty string to indicate no more pages. Ex: `aWQ9MDAyMw==`  |   yes   |


### Program Result
|      Property      |           Type             |                     Description                      |   Required   |
|      :------       |           :--:             |                     :----------                      |     :--:     |
|         id         |          String            |                   The program ID.                    |     yes      |
|        url         |           URL              |    The path to the [Program](#program-1) details.  ex: `https://<program provider>/medbiq/api/programinfo/v1/program/<program id>`    |     yes      |


### Program List
|   Property  |         Type                 |                        Description                         | Required |
|   :------   |         :--:                 |                        :----------                         |  :--:    |
|   programs  |  \[[Program](#program-1)\]   |                  An Array of Program types.                |   yes    |
|     next    |      Base64 String           | Base 64 encoded string containing the data the server needs to paginate. This value can be an empty string to indicate no more pages. Ex: `aWQ9MDAyMw==`  |   yes   |

### Program
|      Property      |           Type             |                     Description                      |   Required   |
|      :------       |           :--:             |                     :----------                      |     :--:     |
|         id         |          String            |                   The program ID.                    |     yes      |
|        url         |          URL               |   The program's API URL. ex: `https://<program provider>/medbiq/api/programinfo/v1/program/<program id>`  |  yes |
|       name         |           String           |            The name/title of the program             |     yes      |
|    language        | [ISO 639-1 Code](https://www.loc.gov/standards/iso639-2/php/code_list.php)  |     Language of instruction used in the program. | no |
| curriculumDuration | [ISO 8601 Duration](https://en.wikipedia.org/wiki/ISO_8601) |  The duration of the program curriculum. ex: `P4Y` (4 years)  |  no  |
|     yearBegan      | [ISO 8601 Date](https://en.wikipedia.org/wiki/ISO_8601) |  The year the program instruction began. ex: `2002`  |  no  |
|     schools        | [School Results List](https://github.com/medbiq/medbiq/blob/master/api/programinfo/v1/school/school.md#school-results-list) |  The list of schools that offer this program.  |  yes   |

## Requests
### GET Program
Get information about a specific program by program ID.  
  
__Method:__  `GET`  
__Path:__ `/medbiq/api/programinfo/v1/program/:id`  
__Response:__   
`200` [Program](#program-1)  

#### Path Parameters
|   Param    |           Type           |       Description        |
|   :---:    |        :--------:        |      :------------:      |
|    id      |            ID            |  Unique identifier of the program being requested  |

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
None
