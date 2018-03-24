import {Component} from '@angular/core';
import {Location} from '@angular/common';
import {ActivatedRoute} from '@angular/router';

import { AdminService } from '../services/admin.service';
import { AbstractController } from '../../base/abstract.controller';
@Component({
    templateUrl: '../../../views/firstModule/page1.html'
})

export class ControllerAdmin extends AbstractController {

  public items: any[];
  public search: string;

  constructor(
    private _service: AdminService
  ) {
    super();
      console.log('ControllerAdmin --');
  }

  onChange() {
  }

  protected init() {

  }

  public getDataQBase() {
    console.log('this.search', this.search)
    this.getDataearch(this.search)
  }

  public getDataearch(data) {
    var params: string[] = [];
    params.push('searchText=' + data);
    this._service.getGada(params)
      .then(res => {
        this.items = res;
        console.log('1', res);
      })
      .catch(err => {
        console.log('---err', err);
        if (err.status == 403) {
          //this.CbrAuthService.onAccessDenied();
        }
      });
  }
}
