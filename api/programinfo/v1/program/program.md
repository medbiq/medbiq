# Program
|     Method                      |       Path                                  |         Response                    |
|    :------:                     |       :--                                   |       :----------:                  |
|  [GET Program](#get-program)    |    /medbiq/api/programinfo/v1/program/:id   |      [Program](#program-1)          |  
|  [GET Programs](#get-programs)  |      /medbiq/api/programinfo/v1/programs    |    [Program List](#program-list)    |  


## Data Model

### Program List
|   Property      |         Type                 |                        Description                         | Required |
|   :------       |         :--:                 |                        :----------                         |  :--:    |
|   programs      |  \[[Program](#program-1)\]   |                  An Array of Program types.                |   yes    |


### Program Result
|      Property      |           Type             |                     Description                      |   Required   |
|      :------       |           :--:             |                     :----------                      |     :--:     |
|         id         |          String            |                   The program ID.                    |     yes      |
|        url         |           URL              |    The path to the [Program](#program-1) details.    |     yes      |


### Program
|      Property      |           Type             |                     Description                      |   Required   |
|      :------       |           :--:             |                     :----------                      |     :--:     |
|         id         |          String            |                   The program ID.                    |     yes      |
|

## Requests
### GET Program
Get information about a specific program by program ID.  
  
__Method:__  GET  
__Path:__ /medbiq/api/programinfo/v1/program/:id

#### Path Parameters
|   Param    |           Type           |       Description        |
|   :---:    |        :--------:        |      :------------:      |
|    id      |            ID            |  Unique identifier of the program being requested  |

#### Query Parameters
None


### GET Programs
Get a list of programs.  
  
__Method:__  GET  
__Path:__ /medbiq/api/programinfo/v1/programs

#### Path Parameters
None

#### Query Parameters
None
