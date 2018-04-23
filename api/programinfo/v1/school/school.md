# School
|     Method                      |       Path                                  |         Response                    |
|    :------:                     |       :--:                                  |       :----------:                  |
|  [GET School](#get-school)      |    /medbiq/api/programinfo/v1/school/:id    |      [School](#school)              |  
|  [GET Schools](#get-schools)    |      /medbiq/api/programinfo/v1/schools     |    [School List](#school-list)      |  


## Data Model

### School
|    Property    |   Type    |    Description     |   Required   |
|    :------:    |   :--:    |    :----------:    |     :--:     |
|       id       |    ID     |  the school ID     |     yes      |


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
