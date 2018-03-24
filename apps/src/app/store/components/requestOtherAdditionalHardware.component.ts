import { Component, Input, OnInit } from '@angular/core';
import { taskFormsService } from '../services/taskForms.service';
import { otherAdditionalHardwareModel } from '../models/otherAdditionalHardware.model';

@Component({
  selector: 'request-other-additional-hardware',
  templateUrl: '../../../views/taskForms/componentForms/requestOtherAdditionalHardware.html'
})
export class RequestOtherAdditionalHardwareComponent implements OnInit {

  public types: any = [];
  public otherAdditionalHardware: otherAdditionalHardwareModel;

  constructor(
    private _service: taskFormsService
  ) {
  }

  ngOnInit() {
    this.types = [' ', 'Production', 'Testing/Development'];
    this.otherAdditionalHardware = new otherAdditionalHardwareModel();
  }

 

  public saveItem() {

    this._service.saveOtherAdditionalHardwarForm(this.otherAdditionalHardware)
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
