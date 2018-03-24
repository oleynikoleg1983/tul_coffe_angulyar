import { Component, Input, OnInit } from '@angular/core';
import { taskFormsService } from '../services/taskForms.service';
import { otherSoftwareFormModel } from '../models/otherSoftware.model';
@Component({
  selector: 'request-other-software',
  templateUrl: '../../../views/taskForms/componentForms/requestOtherSoftware.html'
})
export class OtherSoftwareComponent implements OnInit {

  public types: any = [];
  public otherSoftwareForm: otherSoftwareFormModel;
   
  constructor(
    private _service: taskFormsService
  ) {
  }

  ngOnInit() {
    this.types = [' ', 'Production', 'Testing/Development'];
    this.otherSoftwareForm = new otherSoftwareFormModel();
  }

  public setType(type) {
    this.otherSoftwareForm.type = type;
  }

  public saveItem() {

    this._service.saveOtherSoftwareForm(this.otherSoftwareForm)
      .then(() => {
        console.log('add data');
      })
      .catch(err => {
        console.log('err -- ', err);
        if (err.status == 400) {
         // this.errors = err.data;
        }
      })
  }

  public cancel() {
    console.log('cancel');
  }
}
