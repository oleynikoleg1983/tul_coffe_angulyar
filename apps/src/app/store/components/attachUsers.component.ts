import { Component, Input, OnInit, Output, EventEmitter } from '@angular/core';
import { attachUsersService } from '../services/attachUsers.service';
//import { otherSoftwareFormModel } from '../models/otherSoftware.model';
@Component({
  selector: 'attach-users',
  templateUrl: '../../../views/taskForms/component/attachUsersComponent.html'
})
export class AttachUsersComponent implements OnInit {

  public users: any = [];
  public query: string;
  public attachUsers: any = [];
  @Output() onSelectedChanged = new EventEmitter();

  constructor(
    private _service: attachUsersService
  ) {
  }

  ngOnInit() {
    this.getUsersForQuestion('');
    this.initD();
    console.log('starts');
  }


  public getUsersForQuestion(data) {
    console.log('data -- ', data);
    this._service.getUsersForQuestion(data)
      .then(res => {
        this.users = res.Data;
      })
      .catch(err => {
        if (err.status == 403) {
          //this.CbrAuthService.onAccessDenied();
        }
      });

  }

  public attachUser(data) {

    let result: string = '';
    data.attach = (!data.attach) ? true : false;
  
    if (data.attach) {
      this.attachUsers.push(data)
    } else if (!data.attach) {
      this.attachUsers.forEach((item, i )=> {
        if (item.BaseId == data.BaseId) {
          this.attachUsers.splice(i, 1); 
        } 
      });
    }

    this.attachUsers.forEach((item, i) => {
      result += ((i != 0) ? ',' : '') + item.BaseId;
    });

    this.onSelectedChanged.emit(result);

  }
 
  //////////////////////////////
  public initD() {
    this.users = [
      {
        BaseId: "17cb6e58-3f2d-ee00-0a69-0078a3f2a954",
        ClassName: "User",
        DisplayName: "Evgen4 Blagodyr",
        FullClassName: "Domain User or Group",
        Id: "a7cb6e58-3f2d-ee00-0a69-0078a3f2a954",
        LastModified: "2017-11-26T04:23:42.673Z",
        Path: null
      },
      {
        BaseId: "27cb6e58-3f2d-ee00-0a69-0078a3f2a954",
        ClassName: "User",
        DisplayName: "Natalia3 Tenkova",
        FullClassName: "Domain User or Group",
        Id: "a7cb6e58-3f2d-ee00-0a69-0078a3f2a954",
        LastModified: "2017-11-26T04:23:42.673Z",
        Path: null
      },
      {
        BaseId: "37cb6e58-3f2d-ee00-0a69-0078a3f2a954",
        ClassName: "User",
        DisplayName: "Evgen2 Blagodyr",
        FullClassName: "Domain User or Group",
        Id: "a7cb6e58-3f2d-ee00-0a69-0078a3f2a954",
        LastModified: "2017-11-26T04:23:42.673Z",
        Path: null
      },
      {
        BaseId: "4a7cb6e58-3f2d-ee00-0a69-0078a3f2a954",
        ClassName: "User",
        DisplayName: "Tetiana1 Kaverina",
        FullClassName: "Domain User or Group",
        Id: "a7cb6e58-3f2d-ee00-0a69-0078a3f2a954",
        LastModified: "2017-11-26T04:23:42.673Z",
        Path: null
      }
    ]
  }
}
