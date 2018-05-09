# Expectation

| \_ | \_ | Data Types | Notes/Description |
| :--- | :--- | :--- | :--- |
| **Description** | Provides data on curriculum expectations meeting certain parameters. |  |  |
| **Path** | /api/v1/expectation |  |  |
| **Methods** | GET, POST, PUT DELETE |  |  |
| **Parameter** | ID | ID |  |
| **Filters** | Program ID | String | A unique ID for the educational program to query |
|  | AcademicLevel | String | A unique ID for the Academic level to query |
|  | SequenceBlock | String | A unique id for the Sequence Block to query |
|  | Event | String | A unique id for the Event to query |
|  | Instruction  | Boolean | Presence of instructional methods |
|  | assessment \(presence of assessment methods\) | Boolean | Presence of assessment methods |
|  | InstructionalMethod | String | An instructional method to query |
|  | AssessmentMethod | String | An assessment method to query |
|  | parent expectation | URI | URI of an expectation broader than the expectation returned |
|  | child expectation | URI | URI of an expectation narrower than the expectation returned |
| **Data Returned** | ID | URI | Identifier for the Expectation |
|  | Title | String | Title of the Expectation |
|  | `Category (ask wg email)` | String | Category of the Expectation |
|  | Sequence block | String | Identifier of a Sequence block referencing this Expectation |
|  | Academic level | String | Identifier of an Academic level referencing this expectation |
|  | Event | String | Identifier of an Event referencing this Expectation |
|  | Keyword | String | A keyword associated with this expectation |
|  | Related Competency Object | URI | URI of a related Competency Object |
|  | Parent competency objects \(should this be Broader for consistency?\) | URI | URI of a Competency Object defined as broader than the Expectation queried |
|  | Child competency objects \(should this be Narrower for consistency?\) | URI | URI of a Competency Object defined as narrower than the Expectation queried |
|  | Previous version \(Replaces\) | URI | URI of an Expectation supplanted, displaced, or superceneded by the Expectation queried |
|  | Later versions \(of the competency object – IsReplacedBy\) | URI | URI of an Expectation that supplants, displaces, or supercedes the Expectation queried |



