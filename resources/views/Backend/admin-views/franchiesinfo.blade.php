@extends('masterTwo')
@section('title', 'Franchise Info')
@section('main')
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Franchise Info Table</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table text-center">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Store Name
                        </th>
                        <th>
                          Location
                        </th>
                        <th>
                          Phone Number
                        </th>
                        <th>
                          Email
                        </th>
                        <th colspan=2>
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Shale-Pizza Thai Ha
                          </td>
                          <td>
                            120 Thai Ha Dong Da HN
                          </td>
                          <td>
                            0968987456
                          </td>
                          <td>
                            shalethaiha@gmail.com
                          </td>
                          <td><button type="submit" class="btn btn-primary"style="margin-left: 0px;width: 60px">Edit</button></td>
                          <td><button type="submit" class="btn btn-primary" style="margin-left: 0px;width: 60px">Del</button></td>

                        </tr>
                        <tr>
                         <td>
                            2
                          </td>
                          <td>
                            Shale-Pizza Pho Hue
                          </td>
                          <td>
                            222 Pho Hue Ba Dinh
                          </td>
                          <td>
                            0968345789
                          </td>
                          <td>
                            shalephohue@gmail.com
                          </td>
                          <td><button type="submit" class="btn btn-primary"style="margin-left: 0px;width: 60px">Edit</button></td>
                          <td><button type="submit" class="btn btn-primary" style="margin-left: 0px;width: 60px">Del</button></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                              <button type="submit" class="btn btn-primary" style="margin-left: 0px;">Add new ID</button>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div><br>


        </div>

      </div>
    </div>
    @stop
