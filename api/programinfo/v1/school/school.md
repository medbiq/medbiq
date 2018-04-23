# School
|     Method                      |       Path                                  |         Response                    |
|    :------:                     |       :--:                                  |       :----------:                  |
|  [GET School](#get-school)      |    /medbiq/api/programinfo/v1/school/:id    |      [School](#school)              |  
|  [GET Schools](#get-schools)    |      /medbiq/api/programinfo/v1/schools     |    [School List](#school-list)      |  


## Data Model

### School
|    Property     |        Type         |                            Description                            |   Required   |
|    :------:     |        :--:         |                            :----------:                           |     :--:     |
|       id        |         ID          |                          The school ID                            |     yes      |
|  alternateIDs   |        [ID]         |          List of known alternate IDs for the school               |      no      |
|      name       |       String        |                     Full name of the school                       |     yes      |
| alternateNames  |      [String]       |  List of known alternates, abbreviations, acronyms for the school |      no      |
| historicalNames |      [String]       |  List of known alternates, abbreviations, acronyms for the school |      no      |
|       type      | enum('Private', 'Public') |           The type of school. ex Public                     |     yes      |
| operationalStatus |     boolean       |                Is the school current operational                  |     yes      |
|  schoolWebsites |       [URL]         |                      URLs to school websites                      |      no      |
|     address     |       Address       |                   The main address of the school                  |     yes      |
|   phoneNumbers  |       [String]      |                    Phone numbers for the school                   |     yes      |
|     programs    | [Program]()|


### School List
|   Property  |        Type                 |        Description         | Required |
|   :------:  |        :--:                 |        :----------:        |  :--:    |
|   schools   | \[[School](#school)\]       |  An Array of School types  |   yes    |


## Requests
### GET School
Get information about a specific school by school ID.  
  
__Method:__  GET  
__Path:__ /medbiq/api/programinfo/v1/school/:id

#### Path Parameters
|   Param    |           Type           |       Description        |
|   :---:    |        :--------:        |      :------------:      |
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
